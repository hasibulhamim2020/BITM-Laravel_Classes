<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SessionController;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/add/student',[SudentController::class,'addStudent'])->name('add-student');
Route::get('/manage/student',[SudentController::class,'manageStudent'])->name('manage-student');
Route::post('/store',[SudentController::class,'store'])->name('store');
Route::post('/update',[SudentController::class,'update'])->name('update');
//Route::get('/delete/student/{id}',[SudentController::class,'deleteinfo'])->name('delete');
Route::post('/delete/student',[SudentController::class,'deleteinfo'])->name('delete');
Route::get('/edit/student/{id}',[SudentController::class,'edit'])->name('edit');


Route::resources(['departments' => DepartmentController::class]);
Route::resources(['sessions' => SessionController::class]);

Route::get('/dept/wise/student/{id}',[DepartmentController::class,'deptWiseStudent'])->name('dept.wise.student');
Route::get('/session/wise/student/',[SessionController::class,'sessionWiseStudent'])->name('session.wise.student');

