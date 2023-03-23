<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        //Given scenario
        $this->withoutExceptionHandling();

        Sanctum::actingAs(
            User::factory()->create([
            'name' => 'Bianca',
            'lastname' => 'Giudici',
            'email' => 'b.giudici@gmail.com',
            'password' => '01234567', // password
            ])
        );
     
        $response = $this->get('/');
     
        $response->assertOk();

        $this->assertCount(1, User::all());

    }
 
  
}
