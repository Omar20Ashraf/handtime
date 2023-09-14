<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $fillable = [
        'title',
        'detail',
        'first_image',
        'second_image',
    ];

    public function getFirstImagePathAttribute()
    {
        //first_image_path
        return asset('storage/' . $this->first_image);
    }

    public function getImagePathAttribute()
    {
        //second_image_path
        return asset('storage/' . $this->second_image);
    }
}
