<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cart_product>
 */
class CartProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $carts_id = Cart::inRandomOrder()->first()->id;
        $products_id = Product::inRandomOrder()->first()->id;

        return [
            'quantity' => fake()->randomNumber(),
            'carts_id' => $carts_id,
            'products_id' => $products_id ,
        ];
    }

}
