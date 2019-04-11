<?php

use ID90\Controller\LoginAction;
use ID90\Controller\RenderHotelSearcherAction;
use ID90\Controller\RenderLoginFormAction;
use ID90\Controller\RenderLoginErrorAction;
use ID90\Http\Request;
use ID90\Http\Router;

$request = new Request();
$router = new Router($request);

$router->get('', new RenderLoginFormAction());
$router->post('/login', new LoginAction());
$router->get('/login/error', new RenderLoginErrorAction());
$router->get('/hotels', new RenderHotelSearcherAction());
