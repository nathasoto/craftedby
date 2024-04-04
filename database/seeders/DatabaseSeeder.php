<?php

namespace Database\Seeders;

use App\Models\Order_product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this ->call([
            UserSeeder :: class,
            CategorieSeeder ::class,
            ProductSeeder :: class,
            ShopSeeder::class,
            CartSeeder::class,
            OrderSeeder::class,
            CartProductSeeder::class,
            OrderProductSeeder::class

        ]);


//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
