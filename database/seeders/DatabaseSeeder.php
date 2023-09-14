<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\About;
use App\Models\Product;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Service::factory()->count(4)->image()->create();
        About::factory()->count(1)->create();
        Product::factory()->count(9)->image()->create();
        Testimonial::factory()->count(3)->create();

    }
}
