<?php

use Bramus\Router\Router;
use ID90\Controller\LoginAction;
use ID90\Controller\RenderHotelSearcherAction;
use ID90\Controller\RenderLoginFormAction;
use ID90\Controller\RenderLoginErrorAction;
use ID90\Http\Middleware\CheckLogin;

$router = new Router();
$router->get('', new RenderLoginFormAction());

$router->mount('/auth', function () use ($router) {
    $router->post('/login', new LoginAction());
    $router->get('/login/error', new RenderLoginErrorAction());
});

$router->before('GET|POST', '/secure/.*', new CheckLogin());
$router->mount('/secure', function () use ($router) {
    $router->get('/hotels', new RenderHotelSearcherAction());
});


$router->run();
