<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestRedisController;

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


Route::get('/get-connection', [TestRedisController::class, 'getRConnection']);

Route::get('/set', [TestRedisController::class, 'setValue']);

Route::get('/get', [TestRedisController::class, 'getValue']);

Route::get('/del', [TestRedisController::class, 'deleteValue']);
