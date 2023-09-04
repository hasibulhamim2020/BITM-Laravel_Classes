<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/add/student',[StudentController::class,'addStudent'])->name('add-student');

