<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin
        DB::table('users')->insert([
            'name' => 'Admin',
            'dob' => '2000-12-05',
            'email' => 'admin@gmail.com',
            'phone' => '0123456789',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);
        // Owners
        DB::table('users')->insert([
            'name' => 'House Owner',
            'dob' => '2000-10-09',
            'email' => 'owner@gmail.com',
            'phone' => '1234567567',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => 'owner',
        ]);
        DB::table('users')->insert([
            'name' => 'House Owner 2',
            'dob' => '2000-10-10',
            'email' => 'owner2@gmail.com',
            'phone' => '12345675213',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => 'owner',
            'verification' => true,
        ]);
        // User
        DB::table('users')->insert([
            'name' => 'Normal User',
            'dob' => '2001-01-13',
            'email' => 'user@gmail.com',
            'phone' => '1234323423',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => 'user',
        ]);

        \App\Models\User::factory(10)->create();
    }
}
