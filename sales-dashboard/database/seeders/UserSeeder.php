<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'superadmin',
            'nama' => 'Karen Super',
            'email' => 'karen@example.com',
            'password' => Hash::make('password'), // gunakan bcrypt
            'role' => 0, // Super Admin
        ]);

        User::create([
            'username' => 'adminbs',
            'nama' => 'Bayu Admin',
            'email' => 'bayu@example.com',
            'password' => Hash::make('password'),
            'role' => 1, // Admin
        ]);

        User::create([
            'username' => 'salesari',
            'nama' => 'Ari Sales',
            'email' => 'ari@example.com',
            'password' => Hash::make('password'),
            'role' => 2, // Sales
        ]);
    }
}
