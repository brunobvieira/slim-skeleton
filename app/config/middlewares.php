<?php

/*************************************
 *  Define your app middlewares here *
 *************************************/

// If u dont wanna use this app as rest app
// Remove this middleware
use App\Middleware\ResponseHadler;
$app->add(new ResponseHadler());