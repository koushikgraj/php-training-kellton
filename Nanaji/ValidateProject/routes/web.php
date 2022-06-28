<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContectController;

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
Route::get('nav', function () {
    return view('layout');
});


Route::get('home', function () {
    return view('home');
});
Route::post('contects',[ContectController::class,'get']);
Route::get('contects', function () {
    return view('contects');
});
Route::get('myprofile', function () {
    return view('myprofile');
});
Route::get('display', function () {
    return view('display');
});

