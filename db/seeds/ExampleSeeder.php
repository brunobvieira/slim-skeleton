<?php


use \App\Core\Seeder;
use \Illuminate\Support\Str;

class ExampleSeeder extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $born_at = rand(0, 10) > 5 ? date('Y-m-d') : null;
            $description = rand(0, 10) > 5 ? Str::random(50) : null;

            $this->capsule->table('users')->insert([
                'name' => Str::random(20),
                'email' => Str::random(10) . '@mail.com',
                'password' => sha1('password'),
                'born_at' => $born_at,
                'description' => $description,
                'created_at' => new DateTime()
            ]);
        }
    }
}
