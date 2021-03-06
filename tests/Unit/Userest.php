<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class Userest extends TestCase
{
    public function testInsertUser()
    {
        $user = new User();
        $user->name = "Jane Smith";
        $user->email = "Jane_Smith" . random_int(1, 100) . "@yahoo.com";
        $user->password = password_hash("123456", 1);

        $this->assertTrue($user->save());
    }

    public function testUpdateUser()
    {
        //selects random user
        $user = User::inRandomOrder()->first();
        //dd($user);
        $user->name = "Steve Smith";


        $this->assertTrue($user->update());
    }

    public function testDeletetUser()
    {
        $user = new User();
        $user->name = "Carlos Cabrera";
        $user->email = "carlos_cabrera@yahoo.com";
        $user->password = password_hash("123456",1);
        $user->save();

        $this->assertTrue($user->delete());

    }

    //test if DB contains at least 50 users
    public function testCountUser()
    {
        $user = User::All();
        $usercount = $user->count();

        $this->assertGreaterThanOrEqual(50,$usercount);
    }

}