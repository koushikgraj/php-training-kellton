<?php

$app->withFacades();
$app->withEloquent();
$app->register(App\Providers\AppServiceProvider::class);
$app->register(App\Providers\AuthServiceProvider::class);
$app->routeMiddleware([
'auth' => App\Http\Middleware\Authenticate::class,
]);