<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class AdminDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::insert([
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
            'token' => ''
        ]);
    }
}
