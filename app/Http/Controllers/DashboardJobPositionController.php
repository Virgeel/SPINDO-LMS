<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\JobPosition;

class DashboardJobPositionController extends Controller
{
    public function jobposition(){

        $data['jobpositions'] = JobPosition::all();

        return view('dashboard.jobposition',$data);
    }

    public function createjobposition(){

        

        return view('dashboard.createjobposition');
    }
}
