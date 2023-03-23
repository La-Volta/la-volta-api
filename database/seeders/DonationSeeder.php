<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Donation;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Donation::create([
            'name' => 'basic',
            'interval' => 'month',
            'price' => '5',
            'lookup_key' => 'basic', 
            'st_donation_id' => 'price_1Mom4NEhbIltMipCta1tx7Yj'
            
        ]);
    }
}
