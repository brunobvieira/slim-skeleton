Slim framework skeleton
------------------------
Include:
- Slim framework [(slimphp/slim)](https://github.com/slimphp/Slim)
- Eloquent orm [(illuminate/database)](https://github.com/illuminate/database)
- Phinx migrations [(cakephp/phinx)](https://github.com/cakephp/phinx)
- .env support [(vlucas/phpdotenv)](https://github.com/vlucas/phpdotenv)

Installation
-------------
Use composer to install dependencies.
 ```
 composer install
 ```
 
 Migrations
 ------------
 Just use phinx commands to manage your migrations.  
 For more see [Phinx documentation](http://docs.phinx.org/en/latest/commands.html)
 
 ```
  vendor/bin/phinx create MyNewMigration
  vendor/bin/phinx migrate
  
  vendor/bin/phinx seed:create MyNewSeeder
  vendor/bin/phinx seed:run
 ```