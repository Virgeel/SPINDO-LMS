<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Test;
use App\Models\Content;

class CourseItem extends Model
{
    /** @use HasFactory<\Database\Factories\CourseItemFactory> */
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'type',
        'test_id',
        'content_id',
        'order',
        'duration',
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }

    public function content()
    {
        return $this->belongsTo(Content::class,'content_id',);
    }

}
