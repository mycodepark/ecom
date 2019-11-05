<?php

namespace App\Repositories;

use App\Models\Carousel;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Contracts\CarouselContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Class CarouselRepository
 *
 * @package \App\Repositories
 */
class CarouselRepository extends BaseRepository implements CarouselContract
{
    use UploadAble;

    /**
     * CarouselRepository constructor.
     * @param Carousel $model
     */
    public function __construct(Carousel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listCarousels(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findCarouselById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Carousel|mixed
     */
    public function createCarousel(array $params)
    {
        try {
            $collection = collect($params);

            $image = null;

            if ($collection->has('image') && ($params['image'] instanceof  UploadedFile)) {
                $image = $this->uploadOne($params['image'], 'carousels');
            }

            $featured = $collection->has('featured') ? 1 : 0;
            $menu = $collection->has('menu') ? 1 : 0;

            $merge = $collection->merge(compact('menu', 'image', 'featured'));

            $carousel = new Carousel($merge->all());

            $carousel->save();

            return $carousel;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateCarousel(array $params)
    {
        $carousel = $this->findCarouselById($params['id']);

        $collection = collect($params)->except('_token');

        $featured = $collection->has('featured') ? 1 : 0;
        $menu = $collection->has('menu') ? 1 : 0;

        if ($collection->has('image') && ($params['image'] instanceof  UploadedFile)) {

            if ($carousel->image != null) {
                $this->deleteOne($carousel->image);
            }

            $image = $this->uploadOne($params['image'], 'carousels');

            $merge = $collection->merge(compact('menu', 'image', 'featured'));

        } else {

            $merge = $collection->merge(compact('menu', 'featured'));
        }

        $carousel->update($merge->all());

        return $carousel;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteCarousel($id)
    {
        $carousel = $this->findCarouselById($id);

        if ($carousel->image != null) {
            $this->deleteOne($carousel->image);
        }

        $carousel->delete();

        return $carousel;
    }




}
