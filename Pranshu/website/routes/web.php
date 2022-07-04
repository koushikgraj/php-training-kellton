<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ValidateContact;
use GuzzleHttp\Psr7\Request;

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


Route::view('index', 'Index');
Route::get('contact', function () {
    return view('Contact');
});

// Route::post('profile', function () {
//     return view('Myprofile', ContactController::class, 'store');
// });


Route::view('profile', 'Myprofile');

// Route::get('create', [ContactController::class, 'create']);

Route::post('submit', [ContactController::class, 'store']);
// Route::post('users', [ValidateContact::class, 'getData']);


// Route::post('save', [ContactController::class, 'store']);
