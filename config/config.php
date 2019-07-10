<?php


return [
    'settings' => [
        'displayErrorDetails' => true,
        'secretKey' => getenv('SECRET_KEY') ?: 'secret_key',
        'db' => [
            'driver' => getenv('DB_DRIVER') ?: 'mysql',
            'host' => getenv('DB_HOST') ?: 'localhost',
            'database' => getenv('DB_DATABASE') ?: 'default',
            'username' => getenv('DB_USERNAME') ?: 'root',
            'password' => getenv('DB_PASSWORD') ?: 'root',
        ]
    ]
];