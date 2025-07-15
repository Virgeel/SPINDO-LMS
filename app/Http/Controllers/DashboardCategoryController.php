<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class DashboardCategoryController extends Controller
{
    public function index(){

        $data['categories']=Category::all();

        return view('dashboard.dashboardcategory',$data);
    }
}
