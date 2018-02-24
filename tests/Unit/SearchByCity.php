<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use GuzzleHttp\Client;

class SearchByCity extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $client = new Client();

        # test search by name and sort by price in asc
        // $response = $client->request('GET', 'http://localhost/task/api/hotels/search/city/paris/price/desc');
        // $response = $client->request('GET', 'http://localhost/task/api/hotels/search/city/cairo/price/asc');
        $response = $client->request('GET', 'http://localhost/task/api/hotels/search/city/caro/price/asc');

        # decode json data from response
        $data = $data = json_decode($response->getBody(true), true);

        // $this->assertEquals(1, count($data));
        $this->assertEquals(0, count($data));

        // fwrite(STDERR, print_r($data, TRUE));
        // $this->assertEquals(1, count($data));
        // $this->assertTrue(true);
    }
}
