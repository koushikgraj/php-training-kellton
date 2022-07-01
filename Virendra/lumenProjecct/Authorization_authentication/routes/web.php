<?php

use Illuminate\Support\Facades\Route;

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

$app->group(['prefix' => 'api/'], function ($app) {
    $app->get('login/','UsersController@authenticate');
    $app->post('todo/','TodoController@store');
    $app->get('todo/', 'TodoController@index');
    $app->get('todo/{id}/', 'TodoController@show');
    $app->put('todo/{id}/', 'TodoController@update');
    $app->delete('todo/{id}/', 'TodoController@destroy');
    });