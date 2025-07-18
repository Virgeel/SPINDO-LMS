<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseItem extends Model
{
    /** @use HasFactory<\Database\Factories\CourseItemFactory> */
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'type',
        'test_id',
        'content',
        'order',
        'duration',
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
