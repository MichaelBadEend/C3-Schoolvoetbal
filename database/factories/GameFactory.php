<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Game>
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
            'match_location' => fake()->city(),
            'match_time' => fake()->time(),
            'match_round' => fake()->randomNumber(),
            

            'score_team_1' => fake()->randomNumber(),
            'score_team_2' => fake()->randomNumber(),
        ];
    }
}
