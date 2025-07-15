<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Type;
use App\Models\JobPosition;
use App\Models\Category;

class DashboardContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index($id){

        $data['course'] = Course::where('id',$id)->first();

        $data['contents'] = Content::where('course_id',$id)->get();

        return view('dashboard.dashboardcontent',$data);
    }

    public function create($id)
    {
        $data['course']=Course::where('id',$id)->first();
        $data['types'] = Type::all();
        $data['jobPositions'] = JobPosition::all();
        $data['categories'] = Category::all();

        return view('dashboard.createcontent',$data);
    }

    public function store(Request $request, $id){
        $validatedContent = $request->validate([
            'name'=>'required',
            'uploader_id'=>'required',
            'short_description'=>'required',
            'description'=>'required',
            'course_id' => 'required',
            'type_id'=>'required',
            'thumbnail'=>'',
            'video'=>'',
            'explanation'=>''

        ]);

        $course_id = $id;
        $validatedContent['course_id'] = $course_id;

        Content::create($validatedContent);

        return redirect(route('dashboard.content',['id'=>$id]));
    }

    public function createEvaluation(){

        return view('dashboard.createevaluation');
    }

    public function storeEvaluation(Request $request, $id){

        


        return redirect(route('dashboard.content',['id'->$id]));
    }

    /**
     * Show the form for creating a new resource.
     */
    


    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        //
    }
}
