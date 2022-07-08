<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ERPController;
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

Route::get('sample', function () {
    return view('sample');
});

// Route::get('holiday', function () {
//     return view('holiday');
// });
Route::get('create', function () {
    return view('createholiday');
});

Route::post('store', [ERPController::class, 'store']);
Route::get('holiday', [ERPController::class, 'holiday']);

Route::get('edit/{id}', [ERPController::class, 'edit']);
Route::post('update/{id}', [ERPController::class, 'update']);

// Route::get('delete/{id}', [ERPController::class, 'destroy']);

// ## Update
// Route::get('edit/{id}', 'ERPController@edit')->name('edit');
// Route::post('update/{id}', 'ERPController@update')->name('update');

// ## Delete
// Route::get('delete/{id}', 'ERPController@destroy')->name('delete');

Route::get('get', [ERPController::class, 'index']);