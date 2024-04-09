<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SeachController;

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

// index / show
Route::get('/',[BlogController::class,'index']);
Route::get('/show/showBlog/{blog:title}',[BlogController::class,'show']);

// seach 
Route::get('/search/sarchBlog', [SeachController::class, 'search']);

// apiController
Route::get('/api', [ApiController::class, 'api']);
