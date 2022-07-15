<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 1000),
            'title' => ucwords($this->faker->words(4, true)),
            'body' => $this->faker->paragraph(5),
            'created_at' => $this->faker->dateTimeBetween(now()->subYears(1), now()),
        ];
    }
}
