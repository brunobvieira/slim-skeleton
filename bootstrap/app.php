<?php

$container = $app->getContainer();

// Instantiate the database
require __DIR__ . '/db.php';


// Declaring Routes
require __DIR__ . '/../app/routes.php';