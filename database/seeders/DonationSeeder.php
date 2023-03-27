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
            'name' => '5day',
            'interval' => 'day',
            'price' => '5',
            'lookup_key' => '5day', 
            'st_donation_id' => 'price_1MpwX4EhbIltMipCIZMz9mcx'
            
        ]);

        Donation::create([
            'name' => '5month',
            'interval' => 'month',
            'price' => '5',
            'lookup_key' => '5month', 
            'st_donation_id' => 'price_1MpwYdEhbIltMipCupmdzBuw'
            
        ]);

        Donation::create([
            'name' => '5year',
            'interval' => 'year',
            'price' => '5',
            'lookup_key' => '5year', 
            'st_donation_id' => 'price_1MpwZCEhbIltMipCCowX4vmo'
            
        ]);
    }
}
