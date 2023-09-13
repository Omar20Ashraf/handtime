<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::inertia('/about', 'About')->name('about');

Route::inertia('/testimonial', 'Testimonial')->name('testimonial');

Route::inertia('/products', 'Product')->name('products');

Route::inertia('/contact_us', 'Contact')->name('contact_us');
