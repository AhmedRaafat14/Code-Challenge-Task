<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use GuzzleHttp\Client;

class SearchByDate extends TestCase
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
        $response = $client->request('GET', 'http://localhost/task/api/hotels/search/date/22-10-2020:22-11-2020/price/desc');
        // $response = $client->request('GET', 'http://localhost/task/api/hotels/search/date/10-10-2020:15-10-2020/price/asc');

        # decode json data from response
        $data = $data = json_decode($response->getBody(true), true);

        $this->assertEquals(1, count($data));
        // $this->assertEquals(4, count($data));
        // $this->assertTrue(true);
        // $this->assertTrue(true);
    }
}
