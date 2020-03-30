<?php

namespace App\Giphy;

use App\Giphy\Contracts\GiphyInterface;

class Giphy implements GiphyInterface
{
    /**
     * Search all Giphy GIFs for a word or phrase.
     * Punctuation will be stripped and ignored. On this case.
     *
     * @param $query
     * @param int $limit
     * @param int $offset
     * @return mixed
     */
    public function search($query, $limit = 25, $offset = 0)
    {
        return Request::search('gifs', $query, $limit, $offset);
    }
}
