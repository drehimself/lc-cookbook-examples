<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'total' => $this->faker->numberBetween(1000, 1000000),
            'created_at' => $this->faker->dateTimeBetween('-5 years', now(), config('app.timezone')),
        ];
    }
}
