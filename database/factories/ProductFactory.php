<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'category_id' => rand(1,5),
            'name' => [
                'uz'=> fake()->sentence(3),
                'ru'=> 'Комплекти спалной мебели'
            ],
            'price' =>rand(50000.0,1000000.0),
            'description'=> [
                'uz' => fake()->sentence(5),
                'ru'=> 'Очен крутий мебели для използования. Матраси отличаютcя с лёгкими пузирками'
            ]
        ];
    }
}
