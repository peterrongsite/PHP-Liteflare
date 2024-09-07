<?php
// Include Composer autoload first to ensure all classes are loaded
require_once __DIR__ . '/../../vendor/autoload.php';

// Custom autoloader for Smarty
spl_autoload_register(function ($class) {
    if (strpos($class, 'Smarty') === 0) {
        require_once __DIR__ . '/../../vendor/smarty/smarty/libs/Smarty.class.php';
    }
});

// Load environment variables using vlucas/phpdotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

// index.php or bootstrap.php

// Custom error handler
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

// Custom exception handler
set_exception_handler(function ($exception) {
    (new App\Exceptions\Handler)->handle($exception);
});

// Catch fatal errors
register_shutdown_function(function () {
    $error = error_get_last();
    if ($error !== null && $error['type'] === E_ERROR) {
        (new App\Exceptions\Handler)->handle(new ErrorException($error['message'], 0, $error['type'], $error['file'], $error['line']));
    }
});
