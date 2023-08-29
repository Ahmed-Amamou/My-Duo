<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->sentence(1),
            'genre'=>fake()->randomElement(['MMO','RPG','FPS','Adventure','Sports']),
            'platform'=>fake()->randomElement(['PC','console','mobile']),
            'description'=>fake()->text()

        ];
    }
}
