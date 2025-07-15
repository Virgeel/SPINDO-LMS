<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    public function index(){

        $data['courses'] = Course::all();

        return view('course.courseindex',$data);
    }

    public function home(){

        return view('course.coursehome');
    }
    
    public function single(){
        
        return view('course.coursesingle');
    }

    public function coursepretest(){
        return view('course.coursepretest');
    }

    public function courseposttest(){

        return view('course.courseposttest');
    }

    public function finish(){

        return view('course.coursecongratulate');
    }
}
