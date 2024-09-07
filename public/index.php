<?php
require_once __DIR__ . '/../system/Core/bootstrap.php';

use System\Core\Router;
use App\Test;



$router = new Router();
require __DIR__ . '/../config/routes.php';
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
