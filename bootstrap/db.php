<?php

use \Illuminate\Database\Capsule\Manager as Capsule;
use \Psr\Container\ContainerInterface;


$connection = getenv('DB_CONNECTION');

$capsule = new Capsule();
$capsule->getDatabaseManager()->extend(
    'mongodb',
    function ($config) {
        return new Jenssegers\Mongodb\Connection($config);
    }
);

$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function (ContainerInterface $container) use ($capsule) {
    return $capsule;
};
