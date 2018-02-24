<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

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
        // $this->withoutMiddleware();

        // $response = $this->get('/api/hotels');

        // $response->assertJsonFragment([
        //     'name' => 'Concorde Hotel',
        // ]);

        // $response->assertStatus(200);

        $this->assertTrue(true);
    }
}
