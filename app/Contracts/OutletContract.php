<?php

namespace App\Contracts;

/**
 * Interface OutletContract
 * @package App\Contracts
 */
interface OutletContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listOutlets(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findOutletById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createOutlet(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateOutlet(array $params);

    /**
     * @param $id
     * @return bool
     */
    public function deleteOutlet($id);


}
