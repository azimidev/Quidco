<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchTest extends TestCase
{
    /** @test */
    public function it_generates_successful_response_for_welome_view()
    {
        $this->get('/')->assertSuccessful();
    }

    /** @test */
    public function it_requires_query_params()
    {
        $this->post('/api/search')->assertSessionHasErrors('query');
    }

    /** @test */
    public function it_checks_for_search_api_endpoint_with_the_results()
    {
        $response = $this->post('/api/search', ['query' => 'cat']);

        $response->assertSuccessful();

        $this->assertCount($limit = 25, $response['data']);
    }
}
