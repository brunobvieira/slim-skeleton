<?php

$container = $app->getContainer();


// Instantiate the database
require __DIR__ . '/db.php';


// Declaring Routes
require __DIR__ . '/../app/config/routes.php';


// Declaring App Middlewares
require __DIR__ . '/../app/config/middlewares.php';