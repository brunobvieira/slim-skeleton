<?php

/***********************************
 * Requiring the composer autoload *
 ***********************************/
require __DIR__ . '/../vendor/autoload.php';


/*****************************
 * Initializing app instance *
 *****************************/
$app = new Slim\App(include __DIR__ . '/../config/config.php');
$container = $app->getContainer();


/****************************
 * Initializing db instance *
 ****************************/
require __DIR__ . '/db.php';


/******************************
 * Requiring the routes files *
 ******************************/
require __DIR__ . '/../app/routes.php';