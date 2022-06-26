<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\reqcontroller;

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

Route::resource('/posts', PostController::class);  
Route::get('/re',[reqcontroller::class,'index']);  
Route::get('/full',[reqcontroller::class,'fullurl']);  
Route::get('/url',[reqcontroller::class,'url']);  
Route::get('/path',[reqcontroller::class,'path']);  
Route::get('/ip',[reqcontroller::class,'ip']);  
Route::get('/all',[reqcontroller::class,'all']); 