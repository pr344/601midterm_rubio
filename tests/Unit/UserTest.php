<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    public function testInsertUser()
    {
        $user = new User();
        $user->name = "Jane Smith";
        $user->email = "Jane_Smith" . random_int(1, 100) . "@yahoo.com";
        $user->password = password_hash("123456", 1);

        $this->assertTrue($user->save());
    }
}