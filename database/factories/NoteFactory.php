<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'note' => fake()->realText(2000),
            'user_id' => 1, // Hardcoded user_id
        ];
    }
}