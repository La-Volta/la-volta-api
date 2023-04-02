<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_login_displays_the_login_form(): void
    {
        $this->withoutExceptionHandling();
        $response = $this->post(route('login'),[
            '*' => [
                'email', 'password'
            ]
        ]);

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
        

    }
}
