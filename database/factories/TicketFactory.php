<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = [
            'Create new post item for ticket',
            'Make front page',
            'Run migrations',
            'Add content',
            'Add users'
        ];

        return [
            'title' => $titles[rand(0,4)],
            'description' => fake()->text(),
            'status' => 1,
            'user_id' => rand(0, 10),
            'deadline' => now()
        ];
    }
}
