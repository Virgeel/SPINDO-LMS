<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){


        return view('dashboard.dashboard');
    }

    public function course(){

        return view('dashboard.coursedashboard');
    }

    public function createcourse(){


        return view('dashboard.createcourse');
    }

    public function addcourse(){

        return redirect(route('dashboard.course'));
    }

    public function approval(){

        return view('dashboard.approvaldashboard');
    }

    public function user(){
        
        return view('dashboard.userdashboard');
    }

    public function createuser(){

        return view('dashboard.createuser');
    }
}
