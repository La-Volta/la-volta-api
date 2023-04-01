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
    
    public function test_the_application_returns_a_successful_response(): void
    {
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

    public function test_CheckIfUsersAreListedInJsonFile()
    {
        $this->withoutMiddleware();

        User::factory(2)->create();
        $response = $this->get('/api/users');

        $response->assertStatus(200)
                ->assertJsonCount(2);
    }
 
  
}
