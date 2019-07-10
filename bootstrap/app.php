<?php

/**
 * Requiring the composer autoload
 */
require __DIR__ . '/../vendor/autoload.php';


$config = [
    'displayErrorDetails' => true
];


/**
 * Initializing app instance
 */
$app = new Slim\App($config);


/**
 * Requiring the routes files
 */
require __DIR__ . '/../app/routes.php';