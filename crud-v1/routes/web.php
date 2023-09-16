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
Route::get('/home/',[Studentcontroller::class,'home'])->name('home');
Route::get('/add/student/',[Studentcontroller::class,'addStudent'])->name('add-student');
Route::post('/save/student/',[Studentcontroller::class,'storeStudent'])->name('save-student');
Route::get('/view/student/',[Studentcontroller::class,'viewStudent'])->name('view-student');
Route::get('/edit/student/{id}',[Studentcontroller::class,'editStudent'])->name('edit-student');
Route::post('/update/student/',[Studentcontroller::class,'updateStudent'])->name('update-student');
Route::post('/delete/student/',[Studentcontroller::class,'deleteStudent'])->name('delete-student');

