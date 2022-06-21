<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MidController;
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

Route::get('/aa', function () {
    return ('welcome');
});

Route::middleware([Trail::class])->group(function(){

    Route::get('/test', [MidController::class,'mid']);

});
