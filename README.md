# Slim framework skeleton

### Include:
- Slim framework [(slimphp/slim)](https://github.com/slimphp/Slim)
- Eloquent orm [(illuminate/database)](https://github.com/illuminate/database)
- Phinx migrations [(cakephp/phinx)](https://github.com/cakephp/phinx)
- .env support [(vlucas/phpdotenv)](https://github.com/vlucas/phpdotenv)

## Installation
Use composer to install dependencies.
 ```
 composer install
 ```
 
## Migrations
You can write like a [phinx](http://docs.phinx.org/en/latest/migrations.html)
```
<?php

use Db\Database\Migration;

class MyMigrationPhinx extends Migration
{
    /**
     * Migration change
     */
    public function change()
    {
        $test = $this->table('test');
        $test
            ->addColumn('name', 'string', ['limit' => 100])
            ->addTimestamps()
            ->create();
    }
}

```
or as [Laravel](https://laravel.com/docs/5.8/migrations)
```
<?php

use Db\Database\Migration;
use \Illuminate\Database\Schema\Blueprint;

class MyMigrationEloquent extends Migration
{
    public function up()
    {
        $this->schema->create('test', function (Blueprint $builder) {
            $builder->bigIncrements('id');
            $builder->string('name');
            $builder->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('flights');
    }
}
```

Just use phinx commands to manage your migrations.  
For more see [Phinx documentation](http://docs.phinx.org/en/latest/commands.html)
 
 ```
  vendor/bin/phinx create MyNewMigration
  vendor/bin/phinx migrate
  
  vendor/bin/phinx seed:create MyNewSeeder
  vendor/bin/phinx seed:run
 ```