<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Test;
use App\Models\Answer;

class Questions extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionsFactory> */
    use HasFactory;

    protected $fillable = [
        'test_id',
        'question_text',
    ];

    public function test(){
        return $this->belongsTo(Test::class);
    }

    public function answer(){
        return $this->hasMany(Answer::class,'question_id');
    }

}
