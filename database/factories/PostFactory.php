<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use Illuminate\Support\Facades\App;
use App\Models\User;
use App\Models\Game;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(2),
            'body'=>fake()->text(),
            'user_id'=>fake()->randomElement(User::pluck('id')->toArray()),
            'game_id'=>fake()->randomElement(Game::pluck('id')->toArray())
        ];
    }
}
