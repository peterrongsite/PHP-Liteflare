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
