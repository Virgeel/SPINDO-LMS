<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Content;
use App\Models\Test;
use App\Models\Questions;

class CourseController extends Controller
{
    public function index(){

        $data['courses'] = Course::all();

        return view('course.courseindex',$data);
    }

    public function home($id){

        $data['course'] = Course::where('id',$id)->first();

        $data['contents'] = Content::where('course_id',$id)->get();

        $pretestId = 1;
        $posttestId = 2;
        $data['pretests'] = Test::where('course_id',$id)
                            ->where('test_type_id',$pretestId)
                            ->get();
        
        $data['posttests'] = Test::where('course_id',$id)
                            ->where('test_type_id',$posttestId)
                            ->get();                   

        return view('course.coursehome',$data);
    }
    
    public function single($id){

        $data['course'] = Course::where('id',$id)->firstOrFail();

        $posttestId = 2;
        $data['test'] = Test::where('course_id',$id)
                    ->where('test_type_id',$posttestId)
                    ->firstOrFail();
        
        return view('course.coursesingle',$data);
    }

    public function coursepretest($id, $testId){
        
        $data['test'] = Test::with('test_type')
                    ->where('id', $testId)
                    ->where('course_id', $id)
                    ->firstOrFail();
        
        $data['questions'] = Questions::where('test_id',$testId)->get();        

        return view('course.coursepretest',$data);
    }

    public function courseposttest($id, $testId){

        $data['test'] = Test::with('test_type')
                        ->where('id',$testId)
                        ->where('course_id',$id)
                        ->firstOrFail();

        $data['questions'] = Questions::where('test_id',$testId)->get();

        return view('course.courseposttest',$data);

    }

    public function finish(){

        return view('course.coursecongratulate');
    }
}
