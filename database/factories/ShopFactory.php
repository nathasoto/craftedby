<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
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
            'name' => fake()->company,
            'history' => fake()->paragraph,
            'production_methods' => fake()->paragraph,
            'specialties' => fake()->word,
            'zip_code' => fake()->postcode,
            'description' => fake()->paragraphs(3, true),
            'users_id' => $userId
        ];
    }
}
