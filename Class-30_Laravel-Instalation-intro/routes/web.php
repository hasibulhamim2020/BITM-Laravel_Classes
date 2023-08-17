<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});


//composer create-project laravel/laravel first-project
//
// php artisan serve
//
//
//command:::::::::::          php artisan make:controller HomeController

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/about',[HomeController::class,'about'])->name('about');
