<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Test;

class TestType extends Model
{
    /** @use HasFactory<\Database\Factories\TestTypeFactory> */
    use HasFactory;


    public function test(){
        return $this->hasMany(Test::class);
    }
}
