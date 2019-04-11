<?php

use ID90\Http\Router;
use ID90\Http\Request;
use ID90\Controller\RenderLoginFormAction;
use ID90\Controller\LoginAction;
use ID90\Controller\SearchHotelAction;

$router = new Router(new Request());

$router->get('/', new RenderLoginFormAction());
$router->post('/login', new LoginAction());
$router->get('/hotels', new SearchHotelAction());
