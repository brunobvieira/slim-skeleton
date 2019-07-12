<?php

namespace Db\Database;

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
        $config = require __DIR__ . '/../../config/config.php';
        $dbSettings = $config['settings']['db'];
        $capsule = require __DIR__ . '/../../bootstrap/db.php';

        $this->capsule = $capsule;
        $this->schema = $this->capsule->schema();
    }
}