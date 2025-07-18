<?php

namespace App\Http\Controllers;

use App\Models\CourseItem;
use App\Http\Requests\StoreCourseItemRequest;
use App\Http\Requests\UpdateCourseItemRequest;

class CourseItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCourseItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseItem $courseItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseItem $courseItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseItemRequest $request, CourseItem $courseItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseItem $courseItem)
    {
        //
    }
}
