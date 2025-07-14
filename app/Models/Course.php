<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $fillable = [
        'coursefor_id',
        'uploader_id',
        'type_id',
        'category_id',
        'name',
        'description',
        'category',
        'type',
        'thumbnail',
        'video',
        
    ];
}
