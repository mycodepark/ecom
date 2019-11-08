<?php

namespace App\Repositories;

use App\Models\Outlet;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Contracts\OutletContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Class OutletRepository
 *
 * @package \App\Repositories
 */
class OutletRepository extends BaseRepository implements OutletContract
{
    use UploadAble;

    /**
     * OutletRepository constructor.
     * @param Outlet $model
     */
    public function __construct(Outlet $model)
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
    public function listOutlets(string $order = 'id', string $sort = 'asc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOutletById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Outlet|mixed
     */
    public function createOutlet(array $params)
    {
        try {
            $collection = collect($params);

            $image = null;

            if ($collection->has('image') && ($params['image'] instanceof  UploadedFile)) {
                $image = $this->uploadOne($params['image'], 'outlets');
            }

            $merge = $collection->merge(compact('image'));

            $outlet = new Outlet($merge->all());

            $outlet->save();

            return $outlet;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateOutlet(array $params)
    {
        $outlet = $this->findOutletById($params['id']);

        $collection = collect($params)->except('_token');

        if ($collection->has('image') && ($params['image'] instanceof  UploadedFile)) {

            if ($outlet->image != null) {
                $this->deleteOne($outlet->image);
            }

            $image = $this->uploadOne($params['image'], 'outlets');

            $merge = $collection->merge(compact('image'));

        } else {

            $merge = $collection;
        }

        $outlet->update($merge->all());

        return $outlet;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteOutlet($id)
    {
        $outlet = $this->findOutletlById($id);

        if ($outlet->image != null) {
            $this->deleteOne($outlet->image);
        }

        $outlet->delete();

        return $outlet;
    }




}
