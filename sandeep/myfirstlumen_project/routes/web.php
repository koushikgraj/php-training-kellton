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
$router->get('user/{id}', function ($id) {
    return 'User '.$id;
});
$router->get('show/{name}', function ($name = null) {
    return $name;
});
$router->get('type', function () {
    return 'Hello World';
});
$router->get('profile', ['as' => 'profile', function () {
    //
}]);
$router->get('use/{id}/profile', ['as' => 'profile', function ($id) {
    echo "generating urls to named routes";
}]);
$router->get('/s','UserController@show');