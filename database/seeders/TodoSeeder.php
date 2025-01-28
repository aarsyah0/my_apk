<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::first();

        \App\Models\Todo::create([
            'user_id' => $user->id,
            'title' => 'First Todo',
            'description' => 'This is the first todo item.',
            'is_completed' => false
        ]);
    }

}
