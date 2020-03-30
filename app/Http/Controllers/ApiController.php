<?php

namespace App\Http\Controllers;

use App\Giphy\Giphy;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Perform search using dependency injection.
     * We could use constructor as well for dependency injection.
     *
     * @param \App\Giphy\Giphy $giphy
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function search(Giphy $giphy, Request $request)
    {
        // Validate the request first:
        $this->validate($request, ['query' => 'required']);

        // Generate a JSON response:
        return response()->json($giphy->search($request['query']));
    }
}
