<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'new_price',
        'sale_price',
        'discount',
        'category',
        'image',
        'course_material',
        'course_video',
        'thumbnailPath',
    ];
}
