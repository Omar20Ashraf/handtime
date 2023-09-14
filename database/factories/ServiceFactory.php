<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //
        return [
            //
            'title' => fake()->word,
            'detail' => fake()->text,
            'image' =>  CreateDummyImage::create('services', 'feature-1.png')
        ];
    }
}
