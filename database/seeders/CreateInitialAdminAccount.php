<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateInitialAdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::unguard();

        User::create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12341234'),
            'first_name' => 'Admin',
            'last_name' => 'Account',
            'is_admin' => true,
            'is_active' => true,
            'username' => 'admin-account',
        ]);
    }
}
