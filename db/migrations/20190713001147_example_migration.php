<?php

use App\Core\Migration;
use \Illuminate\Database\Schema\Blueprint;

class ExampleMigration extends Migration
{
    /**
     * Create migration
     */
    public function up()
    {
        $this->schema->create('users', function (Blueprint $builder) {
            $builder->bigIncrements('id');
            $builder->string('name', 100);
            $builder->string('email', 100);
            $builder->text('password');
            $builder->date('born_at')->nullable();
            $builder->string('description', 200)->nullable();
            $builder->timestamps();
        });
    }

    /**
     * Revert migration
     */
    public function down()
    {
        $this->schema->drop('users');
    }
}
