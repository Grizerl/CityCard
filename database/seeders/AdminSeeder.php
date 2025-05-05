<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin1',
            'phone' => '+380950660929',
            'password' => Hash::make('adminpassword1'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Admin2',
            'phone' => '+380950770832',
            'password' => Hash::make('adminpassword2'),
            'role' => 'admin'
        ]);
    }
}
