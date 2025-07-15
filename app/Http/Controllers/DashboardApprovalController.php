<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardApprovalController extends Controller
{
    public function approval(){

        return view('dashboard.approvaldashboard');
    }
}
