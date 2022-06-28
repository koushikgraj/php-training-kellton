<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\AjaxController;
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

Route::get('index', function () {
    return view('Index');
});

// Route::get('search?q=str', [AjaxController::class, 'getdata']);

Route::get("search?q=str", function ($str) {
    // echo "hello wolrd";
    // dd($str);
    // return $str;
    $data = $str;
    return App::call('App\Http\Controllers\AjaxController@getdata', ['data' => $data]);
});
