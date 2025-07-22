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
        'category_id',
        'name',
        'short_description',
        'description',
        'category',
        'type',
        'photo',
    ];


    public function user(){
        
        return $this->belongsTo(User::class,'uploader_id');
    }

    public function jobposition(){
        return $this->belongsTo(JobPosition::class,'coursefor_id','id');
    }
}
