<?php

namespace App\Contracts;

/**
 * Interface AboutContract
 * @package App\Contracts
 */
interface AboutContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listAbout();

    /**
     * @param int $id
     * @return mixed
     */
    public function findAboutById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateAbout(array $params);

        /**
     * @param array $params
     * @return mixed
     */
    public function createMessage(array $params);



}
