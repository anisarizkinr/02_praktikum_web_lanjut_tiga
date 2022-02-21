<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**------Praktikum 3 ------------- */
Route::get('/', [HomeController::class, 'home']);

Route::prefix('category')->group(function(){
    Route::get('/product1', [ProductController::class, 'product1']);
    Route::get('/product2', [ProductController::class, 'product2']);
    Route::get('/product3', [ProductController::class, 'product3']);
    Route::get('/product4', [ProductController::class, 'product4']);
});


Route::get('/news/{id}', [NewsController::class, 'news']);

Route ::prefix('program')->group(function(){
    Route::get('/{id}', [ProgramController::class, 'program']);
});

Route::get('/about-us', function(){
    echo '<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
});

Route::resource('contactus',ContactController::class);


