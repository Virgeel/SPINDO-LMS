<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Question;
use App\Models\User;
use App\Models\TestType;

class Test extends Model
{
    /** @use HasFactory<\Database\Factories\TestFactory> */
    use HasFactory;

    protected $fillable = [
        'course_id',
        'name',
        'test_type_id',
        'uploader_id'
    ];

    public function question(){
        return $this->hasMany(Question::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'uploader_id');
    }

    public function test_type(){
        return $this->belongsTo(TestType::class,'test_type_id');
    }
}
