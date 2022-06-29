<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Models\Website;


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

Route::get('/',[WebController::class,'home']);
Route::view('/home','home');
Route::get('/aboutus',[WebController::class,'aboutus']);
Route::POST('/contact',[WebController::class,'contactus']);
Route::view('/contactus','contactus');
Route::get('/myprofile',[WebController::class,'myprofile']);
Route::get('/contactus',[WebController::class,'contactus']);



