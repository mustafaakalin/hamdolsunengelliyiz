<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hearing>
 */
class OrthopedicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'name' => fake()->name(),
            'slug' => fake()->unique()->slug(),
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'image' => null,
            'twitter' => null,
        ];
    }
}
