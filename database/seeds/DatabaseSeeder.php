<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   // this enables the seeder of users
         $this->call(UsersTableSeeder::class);
         $this->call(CarsTableSeeder::class);

    }
}
