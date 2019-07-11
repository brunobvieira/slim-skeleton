# Slim framework skeleton

### Includes:
- Slim framework [(slimphp/slim)](https://github.com/slimphp/Slim)
- Eloquent orm [(illuminate/database)](https://github.com/illuminate/database)
- Phinx migrations [(cakephp/phinx)](https://github.com/cakephp/phinx)
- .env support [(vlucas/phpdotenv)](https://github.com/vlucas/phpdotenv)

## Installation
Clone and use composer to install the dependencies.
 ```
 composer install
 ```
 
## Migrations
You can write like a [phinx](http://docs.phinx.org/en/latest/migrations.html)
```php
<?php

use Db\Database\Migration;

class MyMigrationPhinx extends Migration
{
    /**
     * Migration change
     */
    public function change()
    {
        $test = $this->table('tests');
        $test
            ->addColumn('name', 'string', ['limit' => 100])
            ->addTimestamps()
            ->create();
    }
}

```
or as [Laravel](https://laravel.com/docs/5.8/migrations)
```php
<?php

use Db\Database\Migration;
use \Illuminate\Database\Schema\Blueprint;

class MyMigrationEloquent extends Migration
{
    public function up()
    {
        $this->schema->create('tests', function (Blueprint $builder) {
            $builder->bigIncrements('id');
            $builder->string('name', 100);
            $builder->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('tests');
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