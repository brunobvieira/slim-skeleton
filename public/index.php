<?php

if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
    unset($url);
    unset($file);
}

// Autoloading
require __DIR__ . '/../vendor/autoload.php';


session_start();


// Declare public functions
require_once __DIR__ . '/../bootstrap/functions.php';
debug_r(['asd' => 'asdasd', 'teasdasd' => 1, 'asdasdq' => [1, 2, 3, 4]], d);

// Instantiate the app
$config = include __DIR__ . '/../config/config.php';
$app = new Slim\App($config);


// Bootstrap the app
require __DIR__ . '/../bootstrap/app.php';


// Run app
$app->run();