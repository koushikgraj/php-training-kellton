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

$router->get('Hello', function () {
    return 'Hello World';
});

$router->post('Hello', function () {
    return 'Hello Kellton';
});



$router->get('user/{id}', function ($id) {
    return 'User '.$id;
});

$router->get('posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'Hi Again post id = '.$postId.', comment id = '.$commentId;
});

// $router->get('user[/{name}]', function ($name = null) {
//     return $name;
// });

$router->get('user/{name:[A-Za-z]+}', function ($name) {
    //
});

$router->get('profile', ['as' => 'profile', function () {
    //
}]);

$router->get('profile', ['as' => 'profile', function () {
    //
}]);




$router->put('user/{id}', 'UserController@update');