<?php

namespace Tests\Unit;

use App\Giphy\Giphy;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    protected Giphy $giphy;

    /** @test */
    public function it_searches_the_query()
    {
        $this->assertEquals(
            $limit = 25,
            $this->giphy->search($query = 'cat')->pagination->count
        );
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->giphy = new Giphy();
    }
}
