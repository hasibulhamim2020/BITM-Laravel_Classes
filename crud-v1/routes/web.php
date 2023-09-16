<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Studentcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Homecontroller::class,'index']);
Route::get('/home',[Studentcontroller::class,'home'])->name('home');
Route::get('/add/student',[Studentcontroller::class,'addStudent'])->name('add-student');
Route::get('/view/student',[Studentcontroller::class,'viewStudent'])->name('view-student');
