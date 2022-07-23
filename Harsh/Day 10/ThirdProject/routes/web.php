<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoodController;

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
Route::get('yaa', function () {
    return view('add');
});

// Route::post('yaa',[UserController::class,'getdata']);
// Route::get('add',[GoodController::class,'show']);
// Route::get('delet/{id}',[GoodController::class,'delete']);
// Route::get('edit/{id}',[GoodController::class,'showdata']);
// Route::post('edit',[GoodController::class,'update']);
Route::view('users','user');
Route::view('noaccess','noaccess');




