<?php

/***********************************
 * Requiring the composer autoload *
 ***********************************/
require __DIR__ . '/../vendor/autoload.php';


/********************
 * Adding .env vars *
 ********************/
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();


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