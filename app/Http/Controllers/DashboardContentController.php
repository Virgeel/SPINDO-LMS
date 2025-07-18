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

use App\Models\CourseItem;

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

        $content = Content::create($validatedContent);

        CourseItem::create([
            'course_id' => $course_id,
            'type' => 'content',
            'title' => $content->name,
            'content_id' => $content->id,
            'order' => CourseItem::where('course_id',$course_id)->max('order') + 1,
        ]);

    
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
            'questions' => 'required|array|min:1',
            'uploader_id' => 'required',
            
        ]);

        $pretestId = 1;
        $posttestId = 2;

        // ✅ Create Quiz
        $pretest = Test::create([
            'course_id' => $request->course_id,
            'name'     => 'Pre-test '.$request->name,
            'test_type_id' => $pretestId,
            'uploader_id' => $request->uploader_id
        ]);

        CourseItem::create([
            'course_id' => $pretest->course_id,
            'type' => 'pre-test',
            'title' => $pretest->name,
            'test_id' => $pretest->id,
            'order' => CourseItem::where('course_id',$pretest->course_id)->max('order') + 1,
        ]);

        $posttest = Test::create([
            'course_id' => $request->course_id,
            'name'     => 'Post-test '.$request->name,
            'test_type_id' => $posttestId,
            'uploader_id' => $request->uploader_id
        ]);

        CourseItem::create([
            'course_id' => $request->course_id,
            'type' => 'post-test',
            'title' => $posttest->name,
            'test_id' => $posttest->id,
            'order' => CourseItem::where('course_id',$posttest->course_id)->max('order') + 1,
        ]);

        // ✅ Loop through questions
        foreach ($request->questions as $qIndex => $qData) {
            $question = Questions::create([
                'test_id' => $pretest->id,
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

        foreach ($request->questions as $qIndex => $qData) {
            $question = Questions::create([
                'test_id' => $posttest->id,
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
