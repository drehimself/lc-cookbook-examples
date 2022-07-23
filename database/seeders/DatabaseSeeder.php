<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1000)->create();
        \App\Models\Order::factory(5000)->create();
        \App\Models\Post::factory(10)->create();


        Song::create([
            'title' => 'Thriller',
            'artist' => 'Michael Jackson',
            'year' => 1982,
            'order' => 2,
        ]);

        Song::create([
            'title' => 'Hey Jude',
            'artist' => 'The Beatles',
            'year' => 1968,
            'order' => 3,
        ]);

        Song::create([
            'title' => 'Bohemian Rhapsody',
            'artist' => 'Queen',
            'year' => 1975,
            'order' => 1,
        ]);

        Song::create([
            'title' => 'Never Gonna Give You Up',
            'artist' => 'Rick Astley',
            'year' => 1987,
            'order' => 6,
        ]);

        Song::create([
            'title' => 'Always Be My Baby',
            'artist' => 'Mariah Carey',
            'year' => 1995,
            'order' => 5,
        ]);

        Song::create([
            'title' => 'Lose Yourself',
            'artist' => 'Eminem',
            'year' => 2002,
            'order' => 4,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
