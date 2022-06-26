<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontroller;
use App\Http\Controllers\secondcontroller;
use App\Http\Controllers\GarideController;




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
    return view('nanaji');
});
Route::get('/aa', function () {
    return view('nani');
});
Route::get('/grant/nani', function () {
    return view('garide');
});
Route::get('/grant/{id}', function ($id) {
    return 'garide' .$id;
});
Route::get('/first', [firstcontroller::class, 'show']);
//Route::get('/sec', [secondcontroller::class, 'display']);
Route::get('/get', [firstcontroller::class, 'getdata']);
Route::get('/show', [firstcontroller::class, 'showdata']);
Route::get('/create', [firstcontroller::class, 'createdepart']);
Route::get('/update', [firstcontroller::class, 'updatedepart']);
Route::get('/delete', [firstcontroller::class, 'deletedepart']);
Route::get('/cre', [firstcontroller::class, 'createdepart2']);

Route::get('/enter', [firstcontroller::class, 'showdata']);

//Route::resource('/posts', secondcontroller::class); 
Route::get('/type', [GarideController::class, 'sh']);
?>






