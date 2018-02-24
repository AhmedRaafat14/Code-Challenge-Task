<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use GuzzleHttp\Client;

class SearchByName extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSearch()
    {
      $client = new Client();

      # test search by name and sort by price in asc
      $response = $client->request('GET', 'http://localhost/task/api/hotels/search/name/m/price/desc');
      // $response = $client->request('GET', 'http://localhost/task/api/hotels/search/name/le/price/asc');

      # decode json data from response
      $data = $data = json_decode($response->getBody(true), true);

      $this->assertEquals(2, count($data));

      // fwrite(STDERR, print_r($data, TRUE));
      // $this->assertEquals(1, count($data));
    }
}
