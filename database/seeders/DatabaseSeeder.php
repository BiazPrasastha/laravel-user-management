<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        User::truncate();
        $users = [
            [
                'name' => 'admin',
                'password' => Hash::make('admin1234'),
                'email' => 'biazprasastha10@gmail.com',
                'role' => 1
            ], [
                'name' => 'user',
                'password' => Hash::make('user1234'),
                'email' => 'biaz.pd@gmail.com',
                'role' => 0
            ]
        ];
        User::insert($users);
    }
}
