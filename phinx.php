<?php

$config = require __DIR__ . '/config/config.php';
$dbSettings = $config['settings']['db'];

return [
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'migration_base_class' => 'Db\Database\Migration',
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_database' => 'default',
        'default' => [
            'adapter' => $dbSettings['driver'],
            'host' => $dbSettings['host'],
            'name' => $dbSettings['database'],
            'user' => $dbSettings['username'],
            'pass' => $dbSettings['password'],
            'port' => $dbSettings['port'],
            'charset' => $dbSettings['charset'],
        ]
    ],
    'version_order' => 'creation'
];