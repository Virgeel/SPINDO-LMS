<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardJobPositionController extends Controller
{
    public function jobposition(){

        return view('dashboard.jobposition');
    }

    public function createjobposition(){

        return view('dashboard.createjobposition');
    }
}
