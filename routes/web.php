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

Route::get('/coursehome',[CourseController::class,'index'])->name('coursehome');