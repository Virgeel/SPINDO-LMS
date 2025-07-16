<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardContentController;
use App\Http\Controllers\DashboardCourseController;
use App\Http\Controllers\DashboardJobPositionController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardApprovalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;



Route::get('/',[HomeController::class,'home']);
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/login',[LoginController::class,'index'])->name('singin');
Route::post('/login',[LoginController::class,'signin'])->name('singin');


Route::get('/course',[CourseController::class,'index'])->name('courseindex');
Route::get('/course/{id}/home',[CourseController::class,'home'])->name('coursehome');
Route::get('/course/home/single',[CourseController::class,'single'])->name('coursesingle');
Route::get('/course/{id}/home/{testId}/pretest',[CourseController::class,'coursepretest'])->name('coursepretest');
Route::get('/course/{id}/home/{testId}/posttest',[CourseController::class,'courseposttest'])->name('courseposttest');
Route::get('/course/congratulate',[CourseController::class,'finish'])->name('coursefinish');

Route::get('/dashboard/course',[DashboardCourseController::class,'index'])->name('dashboard.course');
Route::get('/dashboard/course/create',[DashboardCourseController::class,'createcourse'])->name('dashboard.createcourse');
Route::post('/dsahboard/course/add',[DashboardCourseController::class,'addcourse'])->name('dashboard.addcourse');
Route::get('/dashboard/course/modify/{id}',[DashboardCourseController::class,'coursemodify'])->name('dashboard.coursemodify');

Route::get('/dashboard/category',[DashboardCategoryController::class,'index'])->name('dashboard.category');
Route::get('/dashboard/category/create',[DashboardCategoryController::class,'create'])->name('dashboard.category.create');

Route::get('/dashboard/course/{id}/content',[DashboardContentController::class,'index'])->name('dashboard.content');
Route::get('/dashboard/course/{id}/content/create',[DashboardContentController::class,'create'])->name('dashboard.createcontent');
Route::post('/dashboard/course/{id}/content/create',[DashboardContentController::class,'store'])->name('dashboard.storecontent');

Route::get('/dashboard/course/{id}/content/evaluation/create',[DashboardContentController::class,'createEvaluation'])->name('dashboard.createevaluation');
Route::post('/dashboard/course/{id}/content/evaluation/add',[DashboardContentController::class,'storeEvaluation'])->name('dashboard.storeevaluation');

Route::get('/dashboard/user',[DashboardUserController::class,'user'])->name('dashboard.user');
Route::get('/dsahboard/user/create',[DashboardUserController::class,'createuser'])->name('dashboard.createuser');

Route::get('/dashboard/jobposition',[DashboardJobPositionController::class,'jobposition'])->name('dashboard.jobposition');
Route::get('/dahsboard/jobposition/create',[DashboardJobPositionController::class,'createjobposition'])->name('dashboard.jobposition.create');
Route::get('/dashboard/jobposition/add',[DashboardJobPositionController::class,'addjobposition'])->name('dashboard.jobposition.add');

Route::get('/dashboard/approval',[DashboardApprovalController::class,'approval'])->name('dashboard.approval');



Route::get('/tailwindtest',function(){

    return view('tailwindtest');

});



