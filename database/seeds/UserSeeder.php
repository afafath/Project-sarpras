<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "username" => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make('admin123'),
            "role" => "admin",
        ]);
    }
}
