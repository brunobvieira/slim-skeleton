<?php

use \Illuminate\Database\Capsule\Manager as Manager;


$dbSettings = $container['settings']['db'];

switch ($dbSettings['driver']) {
    case 'mysql':
        $default = [
            'port' => '3306',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true
        ];
        $dbSettings = array_merge($default, $dbSettings);
        break;
    case 'pgsql':
        $default = [
            'port' => '5432',
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer'
        ];
        $dbSettings = array_merge($default, $dbSettings);
    default:
}

$capsule = new Manager();
$capsule->addConnection($dbSettings);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule) {
    return $capsule;
};