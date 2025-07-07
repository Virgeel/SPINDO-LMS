<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;



Route::get('/',[HomeController::class,'home']);
Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/login',[LoginController::class,'index'])->name('singin');
Route::post('/login',[LoginController::class,'signin'])->name('singin');


Route::get('/courseindex',[CourseController::class,'index'])->name('courseindex');
Route::get('/coursehome',[CourseController::class,'home'])->name('coursehome');
Route::get('/coursesingle',[CourseController::class,'single'])->name('coursesingle');
Route::get('/coursepretest',[CourseController::class,'coursepretest'])->name('coursepretest');
Route::get('/courseposttest',[CourseController::class,'courseposttest'])->name('courseposttest');
Route::get('/course-congratulate',[CourseController::class,'finish'])->name('coursefinish');

