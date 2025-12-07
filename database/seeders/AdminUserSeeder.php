<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',           // اجباری
            'mobile' => '456789',       // اجباری
            'email' => 'admin@example.com',  // اجباری
            'password' => Hash::make('12345678'),
            'admin' => 1,
            'staff' => 1,
            'instructor' => 0,
            'verify' => 1,
            'status' => 1,
            'wallet' => 0,
            'email_verified_at' => now(),
            'profile' => null,               // اختیاری
        ]);
    }
}

