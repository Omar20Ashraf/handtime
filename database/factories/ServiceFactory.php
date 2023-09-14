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
        ];
    }

    public function image()
    {
        $images = ['feature-1.png', 'feature-2.png', 'feature-3.png', 'feature-4.png'];

        return $this->state(function () use ($images) {
            return [
                'image' => CreateDummyImage::create('services', $images[array_rand($images)],),
            ];
        });
    }
}
