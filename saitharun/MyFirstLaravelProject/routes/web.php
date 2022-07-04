<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontroller;
use App\Http\Controllers\PostController;

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

Route::get('/sai',function()
{
    return view("tharun");
});
//basic routes

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/user/{name?}', function ($name = null) {
    return $name;
});
 
Route::get('/user/{name?}', function ($name = 'saitharun') {
    return $name;
});

Route::get('/first',[firstcontroller::class, 'show']);

Route::get('/second',[firstcontroller::class, 'sai']);

Route::get('/third',[firstcontroller::class,'data']); 

