<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create a user with id = 1
        User::factory()->create([
            'id' => 1, // Explicitly set id to 1
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('passwd1.'),
        ]);

        // Create 100 notes associated with user_id = 1
        Note::factory(100)->create();
    }
}