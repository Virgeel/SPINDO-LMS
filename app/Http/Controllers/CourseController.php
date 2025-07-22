<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Content;
use App\Models\Test;
use App\Models\Questions;
use App\Models\CourseItem;

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
                            
        $data['courseItems'] = CourseItem::where('course_id', $id)
                            ->orderBy('order')
                            ->get();


        return view('course.coursehome',$data);
    }
    
    public function single($id, $contentId){

        $data['course'] = Course::where('id',$id)->firstOrFail();

        $data['content'] = Content::where('id',$contentId)->firstOrFail();

        $data['courseItems'] = CourseItem::where('course_id',$id)
                                ->orderBy('order')
                                ->get();

        $posttestId = 2;

        
        
        $data['test'] = Test::where('course_id',$id)
                        ->where('test_type_id',$posttestId)
                        ->firstOrFail();
        
        $current = Courseitem::findOrFail($contentId);
        
        $data['next'] = Courseitem::where('course_id', $id)
                ->where('order', '>', $current->order)
                ->orderBy('order')
                ->first();

        $data['prev'] = Courseitem::where('course_id', $id)
                    ->where('order', '<', $current->order)
                    ->orderByDesc('order')
                    ->first();
        
        return view('course.coursesingle',$data);
    }

    public function coursepretest($id, $testId){
        
        $data['test'] = Test::with('test_type')
                    ->where('id', $testId)
                    ->where('course_id', $id)
                    ->firstOrFail();
                    
        $current = CourseItem::where('test_id', $testId)
                        ->where('course_id', $id)
                        ->firstOrFail();
        
        $data['next'] = Courseitem::where('course_id', $id)
                ->where('order', '>', $current->order)
                ->orderBy('order')
                ->firstOrFail();

        $data['course'] = Course::where('id',$id)->firstOrFail();
        
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
