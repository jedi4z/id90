<?php

use ID90\Controller\LoginAction;
use ID90\Controller\RenderHotelSearcher;
use ID90\Controller\RenderLoginFormAction;
use ID90\Http\Request;
use ID90\Http\Router;
use ID90\Http\Middleware\CheckLogin;

$request = new Request();
$router = new Router($request);

$checkLoginMiddleware = new CheckLogin();

$router->get('/', new RenderLoginFormAction());
$router->post('/login', new LoginAction());
$router->get('/hotels', new RenderHotelSearcher($checkLoginMiddleware));
