<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


Route::get('/',[HomeController::class,'index'])->name('home');

Route::resources(['products'=>ProductController::class]);