<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Product;
use  App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        Category::factory(3)->create();


       Product::factory(5)->create(
            [
                'product_image' => 'test_image.png'
            ]
        );

    }
}
