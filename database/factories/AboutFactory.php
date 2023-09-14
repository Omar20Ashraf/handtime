<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
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
            'title' => fake()->word,
            'detail' => fake()->text,
            'first_image' => CreateDummyImage::create('abouts', 'a-1.jpg'),
            'second_image' => CreateDummyImage::create('abouts', 'a-2.jpg')
        ];
    }
}
