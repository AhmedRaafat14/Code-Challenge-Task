<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use GuzzleHttp\Client;

class ExampleTest extends TestCase
{
    use WithoutMiddleware; // use this trait
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/task/api/hotels');

        $this->assertEquals(200, $response->getStatusCode());

        // $this->assertTrue(true);
    }
}
