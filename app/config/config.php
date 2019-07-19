<?php

// Load .env values
if (file_exists(__DIR__ . '/../../.env')) {
    $dotenv = Dotenv\Dotenv::create(__DIR__ . '/../../');
    $dotenv->load();
}

// Configuration values
return [
    'settings' => [
        'displayErrorDetails' => true,
        'secretKey' => getenv('SECRET_KEY') ?: 'secret_key',
        'db' => [
            'driver' => 'mongodb',
            'host' => getenv('DB_HOST') ?: 'locahost',
            'port' => getenv('DB_PORT') ?: '27017',
            'database' => getenv('DB_DATABASE') ?: 'default',
            'username' => getenv('DB_USERNAME') ?: 'root',
            'password' => getenv('DB_PASSWORD') ?: 'root',
            'options' => [
                'database' => 'admin'
            ]
        ]
    ]
];