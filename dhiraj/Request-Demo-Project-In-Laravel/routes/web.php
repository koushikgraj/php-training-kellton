<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
use Illuminate\Http\Request;

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
// Route::get('/us', function (Request $request) {
//     //
// });
Route::get('/foo/bar', [RequestController::class, 'index']);
// Route::get('/foo/bar','RequestController@index');

// Route::get('/register',function() {
//     return view('register');
//     });
//     Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));


Route::get('/register',function() {
    return view('register');
    });
    Route::post('/user/register',[RequestController::class, 'postRegister']);