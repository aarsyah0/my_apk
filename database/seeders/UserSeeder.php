<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password123')
        ]);

        \App\Models\User::create([
            'name' => 'User1',
            'email' => 'user1@example.com',
            'password' => bcrypt('password123')
        ]);

        \App\Models\User::create([
            'name' => 'User2',
            'email' => 'user2@example.com',
            'password' => bcrypt('password123')
        ]);
    }

}
