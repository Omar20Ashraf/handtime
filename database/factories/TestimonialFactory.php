<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
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
            'customer_name' => fake()->name,
            'customer_job' => fake()->jobTitle,
            'opinion' => fake()->paragraph,
            'image' => CreateDummyImage::create('abouts', 'client.jpg')
        ];
    }
}
