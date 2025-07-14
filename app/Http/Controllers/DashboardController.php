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

    public function course(){

        return view('dashboard.coursedashboard');
    }

    public function createcourse(){

        $data['types'] = Type::all();
        $data['jobPositions'] = JobPosition::all();
        $data['categories'] = Category::all();

        return view('dashboard.createcourse',$data);
    }

    public function addcourse(Request $request){


        $validatedCourse = $request->validate([
            'coursefor_id'=> 'required',
            'name' => 'required',
            'uploader_id' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'thumbnail' => '',
            'video' => '',
        ]);


        Course::create($validatedCourse);

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

    public function jobposition(){

        return view('dashboard.jobposition');
    }

    public function createjobposition(){

        return view('dashboard.createjobposition');
    }
}
