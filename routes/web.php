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
    return ('this is get');
});


$router->post('/post', function () use ($router) {
    return ('this is post');
});

$router->patch('/patch', function () use ($router) {
    return ('this is patch');
});


$router->delete('/delete', function () use ($router) {
    return ('this is delete');
});

