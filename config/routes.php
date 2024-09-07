<?php
use App\Controllers\HomeController;
use App\Controllers\UserController;

$router->add('GET', '/', [HomeController::class, 'index']);
$router->add('GET', '/users', [UserController::class, 'index']);
