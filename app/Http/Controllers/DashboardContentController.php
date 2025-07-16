<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Type;
use App\Models\JobPosition;
use App\Models\Category;
use App\Models\TestType;
use App\Models\Test;
use App\Models\Questions;
use App\Models\Answer;

class DashboardContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index($id){

        $data['course'] = Course::where('id',$id)->first();

        $data['contents'] = Content::where('course_id',$id)->get();

        $data['tests'] = Test::where('course_id',$id)->get();

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

    public function createEvaluation($id){

        $data['course']=Course::findorFail($id);
        $data['testtypes']=TestType::all();

        return view('dashboard.createevaluation',$data);
    }

    public function storeEvaluation(Request $request, $id){
        
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'name'     => 'required|string',
            'type'      => 'required',
            'questions' => 'required|array|min:1',
            'uploader_id' => 'required',
            
        ]);

        // ✅ Create Quiz
        $test = Test::create([
            'course_id' => $request->course_id,
            'name'     => $request->name,
            'test_type_id' => $request->type,
            'uploader_id' => $request->uploader_id
        ]);

        // ✅ Loop through questions
        foreach ($request->questions as $qIndex => $qData) {
            $question = Questions::create([
                'test_id' => $test->id,
                'question_text'    => $qData['question_text'],
            ]);

            foreach ($qData['answer_text'] as $aIndex => $answerText) {
                Answer::create([
                    'question_id' => $question->id,
                    'answer_text' => $answerText,
                    'is_correct'  => $aIndex == $qData['correct'] ? 1 : 0,
                ]);
            }
        }

        return redirect()->route('dashboard.content', ['id' => $id]);
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
