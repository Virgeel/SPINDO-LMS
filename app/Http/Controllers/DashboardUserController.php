<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function user(){
        
        return view('dashboard.userdashboard');
    }

    public function createuser(){

        return view('dashboard.createuser');
    }
}
