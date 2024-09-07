<?php

return [
    'db' => [
        'host' => $_ENV['DB_HOST'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'database' => $_ENV['DB_NAME'],
        'port' => $_ENV['DB_PORT'],
    ]
];
