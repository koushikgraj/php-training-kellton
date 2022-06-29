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

Route::get('/a', function () {
    return view('mona');
});
Route::get('/user/(id)', function ($id) {
    return 'This is parameter route. User ID = '.$id;
});
Route::get('/user/{name?}' , function ($name = null) {
    return $name;
});
Route::get('/user/{name?}' , function ($name = 'John') {
    return $name;
});


Route::get('/first-index' , [FirstController::class, 'index']);

Route::get('/get-subjects' , [FirstController::class, 'getSubjects']);

Route::get('/create-subjects' , [FirstController::class, 'createSubjects']);

Route::get('/update-subjects' , [FirstController::class, 'updateSubjects']);