<?php

use \Illuminate\Database\Capsule\Manager as Manager;


if (isset($container)) {
    $dbSettings = $container['settings']['db'];
}

$capsule = new Manager();
$capsule->addConnection($dbSettings);
$capsule->setAsGlobal();
$capsule->bootEloquent();

if (isset($container)) {
    $container['db'] = function ($container) use ($capsule) {
        return $capsule;
    };
}

return $capsule;