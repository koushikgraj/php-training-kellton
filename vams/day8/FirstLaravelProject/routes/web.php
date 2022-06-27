<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Database\Migrations\Migration;
/*
--------------------------------------------------------------------------
Web Routes--------------------------------------------------------------------------

 Here is where you can register web routes for your application. These
 routes are loaded by the RouteServiceProvider within a group which
 contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', PostController::class);
/*
Route::get('/v', function () {
    return view('vams');
});


Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/first-index',[Firstcontroller::class, 'index']);

Route::get('/getstudentdata',[Firstcontroller::class, 'getstudentdata']);
    
Route::get('/create-subjects',[Firstcontroller::class, 'createsubjects']);

Route::get('/getcompany',[firstcontroller::class, 'getcompany']);

Route::get('/create-name',[firstcontroller::class, 'createname']);

Route::get('/update-name',[firstcontroller::class, 'updatename']);

Route::get('/user/{name?}', function ($name='vams') {
        return $name; 
    });
    

    Route::get('/user/{id}', function ($id) {
        return 'User '.$id;
    });
 */ 