<?php

namespace App\Giphy;

use App\Giphy\Contracts\RequestInterface;

class Request implements RequestInterface
{
    /**
     * Make request to giphy api.
     *
     * @param $endpoint
     * @param array $params
     * @return mixed
     */
    public static function request($endpoint, array $params = [])
    {
        // SEE: https://giphy.api-docs.io/1.0/welcome/access-and-api-keys

        $params['api_key'] = env('GIPHY_KEY', 'dc6zaTOxFJmzC'); // --> this is the public api key by default

        $result = file_get_contents('http://api.giphy.com/' . $endpoint . "?" . http_build_query($params));

        return json_decode($result);
    }

    /**
     * Search the giphy api.
     *
     * @param $type
     * @param $query
     * @param $limit
     * @param $offset
     * @return mixed
     */
    public static function search($type, $query, $limit, $offset)
    {
        $endpoint = "v1/{$type}/search";

        $params = [
            'q'      => urlencode($query),
            'limit'  => (int) $limit,
            'offset' => (int) $offset,
        ];

        return Request::request($endpoint, $params);
    }
}
