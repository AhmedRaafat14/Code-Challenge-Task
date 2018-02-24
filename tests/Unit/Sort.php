<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use GuzzleHttp\Client;

class Sort extends TestCase
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
        // $response = $client->request('GET', 'http://localhost/task/api/hotels/sort/name/asc');
        // $response = $client->request('GET', 'http://localhost/task/api/hotels/sort/name/desc');
        // $response = $client->request('GET', 'http://localhost/task/api/hotels/sort/price/asc');
        $response = $client->request('GET', 'http://localhost/task/api/hotels/sort/price/desc');

        # decode json data from response
        $data = $data = json_decode($response->getBody(true), true);

        # this API should return 2 hotels
        $this->assertEquals(6, count($data));
        // $this->assertTrue(true);
    }
}
