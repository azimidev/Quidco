<?php

namespace App\Giphy\Contracts;

interface GiphyInterface
{
    /**
     * Every request must implement search method.
     *
     * @param $query
     * @param int $limit
     * @param int $offset
     * @return mixed
     */
    public function search($query, $limit, $offset);
}
