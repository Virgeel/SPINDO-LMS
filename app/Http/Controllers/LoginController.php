<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view('singin');
    }

    public function singin(){
        
        return view('coursehome');
    }
}
