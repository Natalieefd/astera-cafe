<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('astera'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Natalie Fuad',
            'email' => 'natalie@gmail.com',
            'password' => Hash::make('user'),
            'role' => 'user',
        ]);
    }
}
