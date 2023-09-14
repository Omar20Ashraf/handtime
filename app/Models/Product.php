<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'show_on_top_sale',
        'show_on_feature',
        'show_on_new_arrival',
        'title',
        'price',
        'image',
        'rate',
    ];

    public function getImagePathAttribute()
    {
        //image_path
        return asset('storage/' . $this->image);
    }
}
