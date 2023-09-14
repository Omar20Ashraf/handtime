<?php

namespace Database\Factories;

use Database\Factories\CreateDummyImage;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            //
            'show_on_top_sale' => fake()->numberBetween(0, 1),
            'show_on_feature' => fake()->numberBetween(0, 1),
            'show_on_new_arrival' => fake()->numberBetween(0, 1),
            'title' => 'Watch',
            'price' => fake()->randomFloat(3, 100),
            'image' => 'image',
            'rate' => 5,
        ];
    }

    public function image()
    {
        $images = ['w1.png', 'w2.png', 'w3.png'];

        return $this->state(function () use ($images) {
            return [
                'image' => CreateDummyImage::create('products',$images[array_rand($images)],),
            ];
        });
    }
}
