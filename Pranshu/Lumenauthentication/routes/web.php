<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->post('/post/create', 'PostController@store');

$router->group(["prefix" => "api"], function () use ($router) {
    $router->post('/post/create', 'PostController@store');

    $router->get('/Allposts', 'PostController@index');

    $router->put('/post/update/{id}', 'PostController@update');

    $router->delete('/post/delete/{id}', 'PostController@destroy');
});
