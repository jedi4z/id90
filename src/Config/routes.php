<?php

use ID90\Config\Router;
use ID90\Config\Request;
use ID90\Controller\LoginAction;
use ID90\Controller\SearchHotelAction;

$router = new Router(new Request());

$router->get('/', new LoginAction());
$router->get('/hotels', new SearchHotelAction());
