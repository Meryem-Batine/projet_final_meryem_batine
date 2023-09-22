<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Admin",
            "email" => "admin@admin.com",
            "password" => "12345678",
        ])->assignRole('admin');

        User::create( [
            'name' => 'webmaster',
            'email' => 'webmaster@webmaster.com',
            'email_verified_at' => now(),
            'password' => 'webmaster',
        ])->assignRole('webmaster');
        
        User::create( [
            'name' => 'user',
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => 'useruser', // password
        ])->assignRole('user');


    }
}
