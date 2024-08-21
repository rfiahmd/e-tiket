<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'superAdmin',
            'email' => 'rofieahmad002@gmail.com',
            'password' => bcrypt('superAdmin002'),
            'profile' => 'arf.jpg', 
            'verify_key' => 'uhuuuyahfyeot', 
            'email_verified_at' => now(), 
            'role' => 'Super Admin', 
        ]);
    }
}
