<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

// Route::get('/login', function () {
//     return view('login');
// });


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', [AdminController::class, 'index']);
Route::post('/login', [AdminController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::group(['middleware' => 'web'], function () {
    Route::post('/register', [AdminController::class, 'register']);
});
