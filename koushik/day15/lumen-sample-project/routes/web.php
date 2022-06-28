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
    //echo "<pre>";print_r($router->app);echo "</pre>";
    return $router->app->version();
});

$router->get('test/{name}', 'TestController@hi');

//Request methods
$router->post('store', 'TestController@requestMethods');

//Response methods
//1
$router->get('/hi', function () {
    return 'Hello World';
});

//2
$router->get('json-type', function () {
   return response()->json(['name' => 'Abigail', 'state' => 'CA']);
});

//redirect response
$router->get('dashboard', function () {
    return redirect('/hi');
});

$router->get('posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'Hi Again post id = '.$postId.', comment id = '.$commentId;
});
