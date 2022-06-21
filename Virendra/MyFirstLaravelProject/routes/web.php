<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImplicitController;

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

Route::get('/viren',function(){
    return view("viren");
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/sports.com',function(){
    return "Dhoni i love bro";
});

Route::get('/Controller',[ImplicitController::class,'getIndex']);


