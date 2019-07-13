<?php

/****************************
 *  Define your routes here *
 ****************************/

$app->get('/', '\App\Controller\HomeController:helloWorld');

$app->group('/users', function (\Slim\App $app) {
    $app->get('/', '\App\Controller\UserController::listAction');
    $app->get('/{id:[0-9]+}', '\App\Controller\UserController::getAction');
    $app->post('/', '\App\Controller\UserController::saveAction');
    $app->put('/{id:[0-9]+}', '\App\Controller\UserController::editAction');
    $app->delete('/{id:[0-9]+}', '\App\Controller\UserController::deleteAction');
});