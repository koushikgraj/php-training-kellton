<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Secondcontroller;

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



//CRUD
Route::get('/read-member', [Secondcontroller::class, 'getmembers']);
Route::get('/create-member', [Secondcontroller::class, 'createmembers']);
Route::get('/update-member', [Secondcontroller::class, 'updatemembers']);
Route::get('/delete-member', [Secondcontroller::class, 'deletemembers']);
