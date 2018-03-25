<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PagesTest extends TestCase
{

    //test register page is working
    public function testRegisterScreen()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    //test login page is working
    public function testloginScreen()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
