<?php

namespace Database\Factories;

use App\Models\User;
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
    public function definition(): array
    {
        $userId = User::inRandomOrder()->first()->id;

        return [

            'total' => fake()->randomFloat(2, 1, 10000),
            'shipping address' => fake()->address,
            'status' => fake()->randomElement(['pending', 'shipped', 'delivered']),
            'users_id' => $userId,
        ];
    }
}
