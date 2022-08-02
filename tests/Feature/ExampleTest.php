<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        Http::fake([
            'github.com/*' => Http::response([
                ['name' => 'my-cool-repo-1'],
                ['name' => 'my-cool-repo-2'],
            ], 200),
        ]);

        Http::fake([
            'openweathermap.org/*' => Http::response([
                "weather" => [
                    [ "description" => "broken clouds" ],
                ],
                "main" => [
                    "temp" => 27.1
                ]
                ], 200),
        ]);

        Http::fake([
            'themoviedb.org/*' => Http::response([
                'results' => [
                    ['title' => 'Movie 1'],
                    ['title' => 'Movie 2'],
                ]
            ], 200),
        ]);

        $response = $this->get('/http-client');

        $response->assertSee('my-cool-repo-1');
        $response->assertSee('my-cool-repo-2');

        $response->assertSee('broken clouds');
        $response->assertSee('27.1');

        $response->assertSee('Movie 1');
        $response->assertSee('Movie 2');

        $response->assertStatus(200);
    }
}
