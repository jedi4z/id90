<?php

# Load composer dependencies
require dirname(__DIR__) . '/vendor/autoload.php';

# Initialize DotEnv
$dotenv = Dotenv\Dotenv::create(__DIR__ . '/../');
$dotenv->load();

# Load routes
require dirname(__DIR__) . '/src/Route/routes.php';
