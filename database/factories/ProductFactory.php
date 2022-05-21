<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->name(),
            'category_row_id' => 1,
            'product_price' => 10,
            'product_height' => '2',
            'product_width' => '3',
            'product_weight' => '4',
            'product_sku' => 'sku',
            'product_image' => 'img.png',
            'is_featured' => 1,
            'is_latest' => 1,
            'product_description' => $this->faker->text(),
           
        ];
    }

    
}
