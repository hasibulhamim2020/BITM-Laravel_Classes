<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SudentController;

///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider and all of them will
//| be assigned to the "web" middleware group. Make something great!
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/add/student',[SudentController::class,'addStudent'])->name('add-student');
Route::get('/manage/student',[SudentController::class,'manageStudent'])->name('manage-student');
Route::post('/store',[SudentController::class,'store'])->name('store');
Route::post('/update',[SudentController::class,'update'])->name('update');
//Route::get('/delete/student/{id}',[SudentController::class,'deleteinfo'])->name('delete');
Route::post('/delete/student',[SudentController::class,'deleteinfo'])->name('delete');
Route::get('/edit/student/{id}',[SudentController::class,'edit'])->name('edit');

