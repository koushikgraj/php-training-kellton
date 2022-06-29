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

$router->get('/hi/{name}',function(){
    return "Hello word";
});

$router->get('show/{id}', 'UserController@show');

$router->get('/store',function(){
    return "Hello word";
});

$router->get('user/{id}', function ($id) {
   return 'User id is'.$id;
});

/*$router->get('user[/{name}]', function ($name = null) {
    return 'user name is' .$name;
});*/

/*$router->get('user/{id}/profile', ['as' => 'profile', function ($id) {
    // return "user" .$id .
}]);

$url = route('profile', ['id' => 1]);*/
/*
$router->group(['prefix' => 'admin'], function () use ($router) {
    $router->get('users', function () {
        // Matches The "/admin/users" URL
    });
});*/

$router->get('posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'Hi Again post id = '.$postId.', comment id = '.$commentId;
});
