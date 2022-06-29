
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

$router->get('user', function () {
    return 'User is busy ';
});

$router->get('name/{name}', function ($name = SUPOO) {
    return $name;
});

$router->get('number/{id}' , function($id)
{
    return 'users number is '.$id;
});

$router->get('num/{id}',function($id)
{
  return "The given number ".$id." is the luckiest number";
});


$router->get('test/{name}/test2/{bike}' , function($name , $bike)
{
   return "my name is ".$name . " my bike is ".$bike;
});

$router->get('posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'Hi Again post id = '.$postId.', comment id = '.$commentId;
});

$router->get('show/{id}', 'UserController@show');
