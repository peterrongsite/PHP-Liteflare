<?php
use App\Controllers\HomeController;
use App\Controllers\UserController;

$router->add('GET', '/', [HomeController::class, 'update']);
$router->add('GET', '/users', [UserController::class, 'index']);
