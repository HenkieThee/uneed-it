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
        $categories = ['laptop', 'pc', 'onderdeel'];

        for ($i = 0; $i < 75; $i++) {
            $category = $faker->randomElement($categories);
            $name = '';

            switch ($category) {
                case 'laptop':
                    $name = $faker->words(1, true) . ' Laptop';
                    break;
                case 'pc':
                    $name = $faker->words(1, true) . ' PC';
                    break;
                case 'onderdeel':
                    $name = $faker->words(1, true) . ' Onderdeel';
                    break;
            }

            Product::create([
                'name' => $name,
                'price' => $faker->randomFloat(2, 300, 2000),
                'category' => $category,
                'image' => 'images/pc.jpg',
            ]);
        }
    }
}