<?php


namespace App\Core;


use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Capsule\Manager as Manager;
use Illuminate\Database\Schema\Builder as Schema;
use Phinx\Seed\AbstractSeed;

class Seeder extends AbstractSeed
{
    /**
     * @var Capsule
     */
    protected $capsule;

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
    }
}