<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ERPController;
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

Route::get('layout', function () {
    return view('layout');
});


Route::post('add',[ERPController::class,'addUser']);
Route::get('add',[ERPController::class , 'User']);

Route::post('login',[ERPController::class , 'login']);
Route::get('login',[ERPController::class , 'loginUser']);

Route::get('ex', function () {
    return view('executivedashboard');
});
Route::get('dash', function () {
    return view('dashboard');
});

Route::get('logout',[ERPController::class , 'logoutUser']);
Route::get('get',[ERPController::class , 'getUser']);
