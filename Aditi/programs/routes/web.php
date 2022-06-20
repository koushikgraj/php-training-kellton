<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\SecondController;

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
    return view('aditi');
});

Route::get('/new', function () {
    return view('new');
});

Route::get('/ne/profile', function () {
    return 'this is new page';
})->name('profile');

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});
Route::get('/user/{id}', function ($id='20') {
    return 'User '.$id;
});

Route::get('/books', [FirstController::class, 'books' ]);
Route::get('/second', [SecondController::class, 'second' ]);

Route::get('/get-subjects', [FirstController::class, 'getsubjects' ]);
Route::get('/create-subjects', [FirstController::class, 'createsubjects' ]);
Route::get('/update-subjects', [FirstController::class, 'updatesubjects']);
Route::get('/delete-subjects', [FirstController::class, 'deletesubjects']);


