<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TravelPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('travel_packages')->insert([
            [
                'type' => 'COUNTRYSIDE TOUR',
                'slug' => Str::slug('Tour duration is between 6 to 8 hours'),
                'location' => 'Loboc River Cruise',
                'price' => 2940.00,
                'description' => 'Make Your Bohol Vacation a Memorable and Enjoyable Experience ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'ISLAND HOPPING',
                'slug' => Str::slug('Relaxing Beach Vacation'),
                'location' => 'Balicasag & Virgin Island',
                'price' => 1780.00,
                'description' => 'A new way of vacationing that invites tourists to "hop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'PANGLAO TOUR',
                'slug' => Str::slug('beach is famous for its white sand'),
                'location' => 'Panglao',
                'price' => 1450.00,
                'description' => 'The Panglao Island Bohol Day Tour was a total island adventure!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => '3D2N COUNTRYSIDE + PANGLAO + ISLAND HOPPING',
                'slug' => Str::slug('Countryside & Panglao Tour Loboc River Cruise'),
                'location' => 'Loboc River Cruise, Balicasag & Virgin Island, Panglao',
                'price' => 7869.00,
                'description' => 'Private Boat, Environmental Fees, Life Jacket and Snorkeling Gears',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
