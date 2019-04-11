<?php

use ID90\Controller\LoginAction;
use ID90\Controller\RenderHotelSearcher;
use ID90\Controller\RenderLoginFormAction;
use ID90\Http\Request;
use ID90\Http\Router;

$request = new Request();
$router = new Router($request);

$router->get('', new RenderLoginFormAction());
$router->post('/login', new LoginAction());
$router->get('/hotels', new RenderHotelSearcher());
