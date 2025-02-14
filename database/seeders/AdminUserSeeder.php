<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@fitguide.com.br'],
            [
                'name' => 'Admin',
                'email' => 'admin@fitguide.com.br',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );
    }
}

