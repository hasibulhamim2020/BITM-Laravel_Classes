<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/add/student/',[StudentController::class,'addStudent'])->name('add-student');
Route::post('/store/',[StudentController::class,'saveStudent'])->name('store');

Route::get('/view/student/',[StudentController::class,'viewStudent'])->name('view-student');

Route::get('/update/student/{$id}',[StudentController::class,'updateStudent'])->name('update-student');
Route::post('/update/',[StudentController::class,'updateStudentData'])->name('update');
