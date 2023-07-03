<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/layouts/base', [HomeController::class, 'base']);
Route::get('/', [MainController::class, 'index']);
Route::get('/main/shop', [MainController::class, 'shop']);
Route::get('/main/services', [MainController::class, 'services']);
Route::get('/main/about', [MainController::class, 'about']);
Route::get('/main/contact', [MainController::class, 'contact']);
Route::get('/main/blog', [MainController::class, 'blog']);


