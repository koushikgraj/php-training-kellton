<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::view('home' , 'home');
// Route::view('contact' , 'contact');
// Route::view('about' , 'about');

Route::post('add',[HomeController::class,'addData']);
Route::get('contact',[HomeController::class,'contact']);
Route::get('about',[HomeController::class,'about']);
Route::get('home',[HomeController::class,'addData']);

Route::post("store", [MyController::class,'store']);


Route::get('/contact',[WebController::class,'contact']);
Route::get('/about',[WebController::class,'about']);
Route::get('/blog',[WebController::class,'blog']);
Route::get('/post',[WebController::class,'post']);
Route::get('/master',[WebController::class,'master']);