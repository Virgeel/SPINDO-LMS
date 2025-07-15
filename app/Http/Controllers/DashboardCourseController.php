<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

use App\Models\Type;
use App\Models\JobPosition;
use App\Models\Category;

class DashboardCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        $data['courses'] = Course::all();

        return view('dashboard.coursedashboard',$data);
    }

    public function createcourse(){

        $data['jobPositions'] = JobPosition::all();
        $data['categories'] = Category::all();

        return view('dashboard.createcourse',$data);
    }

    public function addcourse(Request $request){


        $validatedCourse = $request->validate([
            'coursefor_id'=> 'required',
            'name' => 'required',
            'uploader_id' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'thumbnail' => '',
            'video' => '',
        ]);


        Course::create($validatedCourse);

        return redirect(route('dashboard.course'));
    }

    public function coursemodify($id){

        return view('dashboard.coursemodify');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
