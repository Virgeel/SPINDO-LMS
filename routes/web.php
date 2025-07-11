<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;



Route::get('/',[HomeController::class,'home']);
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/login',[LoginController::class,'index'])->name('singin');
Route::post('/login',[LoginController::class,'signin'])->name('singin');


Route::get('/course',[CourseController::class,'index'])->name('courseindex');
Route::get('/coursehome',[CourseController::class,'home'])->name('coursehome');
Route::get('/coursesingle',[CourseController::class,'single'])->name('coursesingle');
Route::get('/coursepretest',[CourseController::class,'coursepretest'])->name('coursepretest');
Route::get('/courseposttest',[CourseController::class,'courseposttest'])->name('courseposttest');
Route::get('/course-congratulate',[CourseController::class,'finish'])->name('coursefinish');

Route::get('/dashboard/course',[DashboardController::class,'course'])->name('dashboard.course');
Route::get('/dashboard/course/create',[DashboardController::class,'createcourse'])->name('dashboard.createcourse');
Route::post('/dsahboard/course/add',[DashboardController::class,'addcourse'])->name('dashboard.addcourse');

Route::get('/dashboard/user',[DashboardController::class,'user'])->name('dashboard.user');
Route::get('/dsahboard/user/create',[DashboardController::class,'createuser'])->name('dashboard.createuser');
Route::get('/dashboard/approval',[DashboardController::class,'approval'])->name('dashboard.approval');




