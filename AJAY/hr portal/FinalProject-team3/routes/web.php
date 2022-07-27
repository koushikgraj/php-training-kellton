<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LoginController;

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

Route::get('apply', function () {
    return view('apply');
});
Route::post('store',[LeaveController::class,'saveleave']);
Route::get('create',[LeaveController::class,'show']);


/*Route::get('create', function () {
    return view('create');
});*/


Route::get('approve', function () {
    return view('approve');
});
Route::get('login', function () {
    return view('login');
});

/*Route::get('ldetails', function () {
    return view('leave-details');
});*/
Route::post('adaction',[LoginController::class,'adaction']);

Route::post('adlogin',[LoginController::class,'login']);
Route::get('adlogin',[LoginController::class,'loginuser']);
Route::get('admin',[LoginController::class,'show']);

Route::get('details/{id}',[LoginController::class,'viewDetails']);

Route::get('takeaction',[LoginController::class,'adaction']);

//Route::get('actionad',[LoginController::class,'adaction']);