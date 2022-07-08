<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TimesheetController;

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

Route::get('/timesheet', function () {
    return view('timesheet');
});


Route::post('/store', [TimesheetController::class, 'store']);

Route::get('layout', function () {
    return view('layout');
});

Route::get('get', [TimesheetController::class, 'index']);
