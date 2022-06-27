<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('layout', function () {
    return view('layout');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('contact',[ContactController::class,'validateform']);

Route::get('profile', function () {
    return view('profile');
});
Route::get('about', function () {
    return view('about');
});

Route::get('home', function () {
    return view('home');
});