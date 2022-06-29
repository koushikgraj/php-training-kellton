<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/index',[WebController::class,'index']);
Route::get('/contact',[WebController::class,'contact']);
Route::get('/about',[WebController::class,'about']);
Route::get('/blog',[WebController::class,'blog']);
Route::get('/post',[WebController::class,'post']);
Route::get('/master',[WebController::class,'master']);

// Route::get('/about',function(){
//     return view("viren");
// });

// Route::get('/blog', function () {
//     return 'Hello World';
// });

// Route::get('/contact',function(){
//     return "Dhoni i love bro";
// });
Route::get('/index',function(){
    return "Dhoni i love bro";
});

// Route::get('/master',function(){
//     return "Dhoni i love bro";
// });

// Route::get('/post',function(){
//     return "Dhoni i love bro";
// });