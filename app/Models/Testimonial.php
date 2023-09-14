<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonials';

    protected $fillable = [
        'customer_name',
        'customer_job',
        'opinion',
        'image',
    ];

    public function getImagePathAttribute()
    {
        //image_path
        return asset('storage/' . $this->image);
    }
}
