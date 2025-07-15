<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Course;


class Content extends Model
{
    protected $fillable = [
        'name',
        'uploader_id',
        'short_description',
        'description',
        'course_id',
        'type_id',
        'thumbnail',
        'video',
        'explanation',
        
    ];

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'uploader_id');
    }
}
