<?php

namespace App\Contracts;

/**
 * Interface AboutContract
 * @package App\Contracts
 */
interface ProfileContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listProfile();

    /**
     * @param int $id
     * @return mixed
     */
    public function findProfileById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateProfile(array $params);

        /**
     * @param array $params
     * @return mixed
     */
    public function createMessage(array $params);


            /**
     * @param array $params
     * @return mixed
     */
    public function changePassword(array $params);


}
