<?php

namespace App\Core;

use Illuminate\Database\Capsule\Manager as Manager;
use Phinx\Migration\AbstractMigration;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Builder as Schema;

class Migration extends AbstractMigration
{
    /**
     * @var Capsule
     */
    protected $capsule;

    /**
     * @var Schema
     */
    protected $schema;

    /**
     * Load and config eloquent
     *  { @inheritDoc }
     */
    public function init()
    {
        $config = require __DIR__ . '/../../app/config/config.php';

        $capsule = new Manager();
        $capsule->addConnection($config['settings']['db']);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

        $this->capsule = $capsule;
        $this->schema = $this->capsule->schema();
    }
}