<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Carl',
            'email' => 'carlyip36@gmail.com',
            'phone_number' => '123-456-7890', // Example phone number
            'role' => 1, 
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'), // Set a default password
            'remember_token' => Str::random(10),
            'current_team_id' => null, // Assuming there's no team set initially
            'profile_photo_path' => null, // Assuming no profile photo initially
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
