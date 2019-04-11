<?php

use Bramus\Router\Router;
use ID90\Controller\LoginAction;
use ID90\Controller\RenderHotelSearcherAction;
use ID90\Controller\RenderLoginFormAction;
use ID90\Controller\RenderLoginErrorAction;
use ID90\Http\Middleware\CheckLogin;
use ID90\Controller\LogoutAction;
use ID90\Controller\RenderHotelResultAction;
use ID90\Controller\SearchHotelAction;

$router = new Router();
$router->get('', new RenderLoginFormAction());

$router->mount('/auth', function () use ($router) {
    $router->post('/login', new LoginAction());
    $router->get('/logout', new LogoutAction());
    $router->get('/error', new RenderLoginErrorAction());
});

$router->mount('/secure', function () use ($router) {
    $router->mount('/hotels', function () use ($router) {
        $router->get('/searcher', new RenderHotelSearcherAction());
        $router->get('/search', new SearchHotelAction());
        $router->get('/results', new RenderHotelResultAction());
    });
});

// Configure middleware to check if the user is logged.
$router->before('GET|POST', '/secure/.*', new CheckLogin());

$router->run();
