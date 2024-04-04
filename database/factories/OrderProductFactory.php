<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\order_product>
 */
class OrderProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $products_id = Product::inRandomOrder()->first()->id;
        $orders_id = Order::inRandomOrder()->first()->id;

        return [
            'quantity' => fake()->randomNumber(),
            'unit_price' => fake()->randomFloat(2, 0, 1000),
            'available_colors' => fake()->randomElement(['red', 'green', 'rose']),
            'available_sizes' => fake()->randomElement(['small', 'medium', 'tall']),
            'products_id' => $products_id,
            'orders_id' => $orders_id
        ];
    }
}
