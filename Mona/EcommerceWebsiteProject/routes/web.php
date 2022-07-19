<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ecomController;

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
Route::get('index', function () {
    return view('index');
});
Route::get('login', function () {
    return view('login');
});
Route::get('signup', function () {
    return view('signup');
});
Route::get('cart', function () {
    return view('cart');
});
Route::get('add', function () {
    return view('addcategory');
});
Route::post('register', [ecomController::class, 'register']);
Route::post('login',[ecomController::class , 'login']);
Route::get('', function () {
    if(Session::exists('user')) {
        return view('layout');
    }else{
        return view('not_authorized');
    }
});


