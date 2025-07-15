<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\JobPosition;
use App\Models\Category;
use App\Models\Type;


class DashboardController extends Controller
{
    public function index(){


        return view('dashboard.dashboard');
    }

}
