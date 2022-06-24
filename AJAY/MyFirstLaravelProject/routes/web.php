<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\PostController;
use App\Http\Controllers\MyFirstController;
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
    return "VAVILAPALLI AJAY KUMAR";
    return view('welcome');
});
Route::get('/AJAY', function () {
    return "AJAY LARAVAL PROJECT";
    return view('welcome');
});
Route::redirect('apple','ball');
Route::get('ball',function(){
    return "redirected route";
});
Route::get('/user/{name?}', function ($name = null) {
    return $name;
});
 
Route::get('/user/{name?}', function ($name = 'AJAY') {
    return $name;
});
Route::get('/home',[MyFirstController::class,'index']);
Route::get('/add-post',[PostController::class,'addPost']);

Route::resource('/posts', PostController::class);

