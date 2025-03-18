<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'lastname' => 'Admin',
            'birthday' => now(),
            'email' => env('ADMIN_EMAIL'),
            'password' => Hash::make('.Admin.'),
            'email_verified_at' => now()
        ]);
    }
}
