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


//$router->get($uri, $callback);

$router->get('foo', function () {
    return 'Hello World';
});



/*$router->get('profile', ['as' => 'profile', function ($profile) {
    return 'hi everyone';
}]);*/


$router->get('posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'Hi Again post id = '.$postId.', comment id = '.$commentId;
});

$router->get('sub/{name}', 'TestController@demo');
$router->post('use', 'TestController@requestmethods');
$router->get('dash', function () {
    return redirect('foo');
});

