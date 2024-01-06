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
            'name' => 'Bristy Saha',
            'dob' => '2000-12-05',
            'email' => 'bristy@gmail.com',
            'phone' => '0123456789',
            'photo' => 'user.png',
            'email_verified_at' => now(),
            'password' => Hash::make('admin987%'),
            'role' => 'admin',
        ]);
        // Owners
        // DB::table('users')->insert([
        //     'name' => 'Jarif Rahman',
        //     'dob' => '2000-10-09',
        //     'email' => 'jarif@gmail.com',
        //     'phone' => '1234567567',
        //     'photo' => 'user.png',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('12345678'),
        //     'role' => 'owner',
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'Mahadi',
        //     'dob' => '2000-10-10',
        //     'email' => 'mahadi@gmail.com',
        //     'phone' => '12345675213',
        //     'photo' => 'user.png',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('12345678'),
        //     'role' => 'owner',
        // ]);
        // User
        // DB::table('users')->insert([
        //     'name' => 'Normal User',
        //     'dob' => '2001-01-13',
        //     'email' => 'user@gmail.com',
        //     'phone' => '1234323423',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('12345678'),
        //     'role' => 'user',
        // ]);

        // \App\Models\User::factory(10)->create();
    }
}
