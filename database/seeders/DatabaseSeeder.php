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
        DB::table('users')->insert([
            'role' => 0,
            'name' => 'Admin',
            'dob' => '2023-10-05',
            'email' => 'admin.dh@gmail.com',
            'phone' => '0123456789',
            'password' => Hash::make('1234%^&*'),
        ]);
    }
}
