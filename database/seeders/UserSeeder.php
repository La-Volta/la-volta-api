<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*User::factory()->count(2)->create();*/
        User::create([
            'name' => 'maria',
            'lastname' => 'rodrigues',
            'email' => 'camilo@gmail.com',
            'password' => bcrypt('password')
            ])->assignRole('Admin');
    
        User::factory()->create();

        
    }
    
}
