<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
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
Route::get('/post', [RequestController::class,'index']);
Route::get('/url', [RequestController::class,'url']);
Route::get('/fullurl', [RequestController::class,'fullurl']);
Route::get('/path', [RequestController::class,'path']);   

Route::get('/login', [LoginController::class,'index'])->name('login.index');
Route::post('/login', [LoginController::class,'loginsubmit'])->name('login.submit');