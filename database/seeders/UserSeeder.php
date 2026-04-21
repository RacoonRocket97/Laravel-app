<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    public function run(): void {
        $users = [
            ['name' => 'Admin User',      'email' => 'admin@sting.com',      'password' => Hash::make('password'), 'role' => 'admin'],
            ['name' => 'Journalist User', 'email' => 'journalist@sting.com', 'password' => Hash::make('password'), 'role' => 'journalist'],
            ['name' => 'VIP Member',      'email' => 'vip@sting.com',        'password' => Hash::make('password'), 'role' => 'vip_member'],
            ['name' => 'Fan User',        'email' => 'fan@sting.com',        'password' => Hash::make('password'), 'role' => 'fan'],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(['email' => $user['email']], $user);
        }
    }
}