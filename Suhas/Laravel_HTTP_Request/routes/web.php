<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/aab', function () {
    return('welcome');
});

Route::get('/users' , [UserController::class ,'testRequest']);
Route::view('login','users');

Route::post('/post' , [UserController::class ,'testPost']);
Route::view('tryPost','post');

Route::put('/put' , [UserController::class ,'testPut']);
Route::view('tryPut','put');

Route::delete('/delete' , [UserController::class ,'testPut']);
Route::view('tryDelete','delete');


