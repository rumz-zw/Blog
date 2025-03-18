<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DefaultUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creating an Admin account 
        User::create([
            'name' => 'Admin',
            'surname' => 'Admin',
            'role' => 'AD',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('abc123'),

        ]);
    }
}
