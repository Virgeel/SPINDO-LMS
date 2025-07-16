<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Question;

class Answer extends Model
{
    /** @use HasFactory<\Database\Factories\AnswerFactory> */
    use HasFactory;

    protected $fillable = [
        'question_id',
        'is_correct',
        'answer_text',
        'option',
    ];

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
