<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\SecondController;

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
Route::get('/a', function () {
    return view('/Arshil');
});
Route::get('/k', function () {
    return view('/Kunal');
});
//Basic Routing
Route::get('/greeting', function () {
    return 'Hello World';
});


//optional parameters

Route::get('/user/{name?}', function ($name = null) {
    return $name;
});
 
Route::get('/user/{name?}', function ($name = 'Arshil') {
    return $name;
});

Route::get('/students',[FirstController::class,'students']);

Route::get('/friends',[SecondController::class,'friends']);

Route::get('/getsubjects',[FirstController::class,'getsubjects']);
Route::get('/createsubjects',[FirstController::class,'createsubjects']);

