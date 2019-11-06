<?php

namespace App\Repositories;

use App\Models\About;
use App\Models\Message;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Contracts\AboutContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Class AboutRepository
 *
 * @package \App\Repositories
 */
class AboutRepository extends BaseRepository implements AboutContract
{
    use UploadAble;

    /**
     * AboutRepository constructor.
     * @param About $model
     */
    public function __construct(About $model)
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
    public function listAbout()
    {
        return $this->all()->first();
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findAboutById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }



    /**
     * @param array $params
     * @return mixed
     */
    public function updateAbout(array $params)
    {
        $about = $this->findAboutById(1);

        $collection = collect($params)->except('_token');

        if ($collection->has('image') && ($params['image'] instanceof  UploadedFile)) {

            if ($about->image != null) {
                $this->deleteOne($about->image);
            }

            $image = $this->uploadOne($params['image'], 'about');

            $merge = $collection->merge(compact('image'));

        } else {

            $merge = $collection;
        }

        $about->update($merge->all());

        return $about;
    }


    /**
     * @param array $params
     * @return Message|mixed
     */
    public function createMessage(array $params)
    {
        try {
            $collection = collect($params);

            $message = new Message($collection->all());

            $message->save();

            return $message;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    


}
