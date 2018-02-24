<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use GuzzleHttp\Client;

class SearchByPrice extends TestCase
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
        // $response = $client->request('GET', 'http://localhost/task/api/hotels/search/price/100:200/name/desc');
        $response = $client->request('GET', 'http://localhost/task/api/hotels/search/price/50:80/name/asc');

        # decode json data from response
        $data = $data = json_decode($response->getBody(true), true);

        // $this->assertEquals(3, count($data));
        $this->assertEquals(1, count($data));
        // $this->assertTrue(true);
    }
}
