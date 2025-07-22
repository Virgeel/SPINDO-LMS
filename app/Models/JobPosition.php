<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    /** @use HasFactory<\Database\Factories\JobPositionFactory> */
    use HasFactory;

    public function course(){
        return $this->hasMany(Course::class);
    }
}
