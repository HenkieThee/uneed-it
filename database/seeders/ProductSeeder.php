<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 25; $i++) {
            Product::create([
                'name' => $faker->words(2, true) . ' Laptop',
                'price' => $faker->randomFloat(2, 300, 2000),
                'image' => 'images/pc.jpg',
            ]);
        }
    }
}