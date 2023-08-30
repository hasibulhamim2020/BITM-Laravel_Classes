<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

use App\Http\Controllers\HomeController;
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/portfolio',[HomeController::class,'portfolio'])->name('portfolio');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/details/{id}',[HomeController::class,'details'])->name('details');

