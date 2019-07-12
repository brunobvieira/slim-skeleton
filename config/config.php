<?php

/********************
 * Adding .env vars *
 ********************/

if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = Dotenv\Dotenv::create(__DIR__ . '/../');
    $dotenv->load();
}

/**************************
 * Array of configuration *
 **************************/
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
            'port' => getenv('DB_PORT') ?: '3306',
            'charset' => getenv('DB_CHARSET') ?: 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true
        ]
    ]
];