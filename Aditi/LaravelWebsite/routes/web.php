<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidationController;

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

Route::view("index",'index');
//Route::view("contact",'contact');
Route::view("about",'about');
Route::view("MyProfile",'MyProfile');

Route::post('contact',[ValidationController::class,'validateform']);
Route::get('contact',function(){
    return view('contact');
});

//Route::get('/contact', 'ValidationController@show')->name('contact.show');
//Route::post('/contact', 'ValidationController@validateform')->name('contact.perform');