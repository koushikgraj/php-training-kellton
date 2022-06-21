<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\firstController;
use App\Http\Controllers\secondcontroller;
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
Route::get('/g', function () {
    return view('gopal');
});
Route::get('/r', function () {
    return view('rudru');
});

//basic routing
Route::get('/greeting',function(){
    return 'Hello world';
});
Route::get('/firstindex',[firstController::class,'first']);
Route::get('/s',[secondcontroller::class,'second']);
//crud operations
Route::get('/read', [firstController::class, 'getSubjects']);
Route::get('/create', [firstController::class, 'createSubjects']);
Route::get('/update', [firstController::class, 'updateSubjects']);
Route::get('/delete', [firstController::class, 'deleteSubjects']);


//named routing
route::get('/user/profile',function(){
    return 'this page is user profile';
})->name('profile');

//optional parameters
Route::get('/user/{name?}',function($name=null){
    return $name;
});
Route::get('/user/{name?}',function($name='gopal'){
    return $name;
});
Route::get('/user/{id}',function($id){
    return 'user'.$id;
});