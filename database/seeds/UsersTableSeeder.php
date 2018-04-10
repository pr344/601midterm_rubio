<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //To use the factory model:
        //This seed the users
        factory(App\User::class,50)->create()->each(function ($u) {
            // $u->posts()->save(factory(App\Post::class)->make());
        });
    }
}
