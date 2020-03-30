<?php

namespace App\Giphy\Contracts;

interface RequestInterface
{
    /**
     * Makes request to the api.
     *
     * @param $endpoint
     * @param array $params
     * @return mixed
     */
    public static function request($endpoint, array $params = []);

    /**
     * Searches the api.
     *
     * @param $type
     * @param $query
     * @param $limit
     * @param $offset
     * @return mixed
     */
    public static function search($type, $query, $limit, $offset);
}
