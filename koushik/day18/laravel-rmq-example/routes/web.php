<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RmqController;

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


Route::get('/connect', [RmqController::class, 'RMQConnection']);

Route::get('/declare', [RmqController::class, 'declareMessage']);

Route::get('/read', [RmqController::class, 'readMessages']);
