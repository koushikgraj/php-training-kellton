<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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

Route::get('/read-employee', [FirstController::class, 'getemployee']);
Route::get('/create-employee', [FirstController::class, 'createemployee']);
Route::get('/update-employee', [FirstController::class, 'updateemployee']);
Route::get('/delete-employee', [FirstController::class, 'deleteemployee']);
