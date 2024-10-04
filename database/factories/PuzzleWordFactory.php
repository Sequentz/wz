<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PuzzleWordFactory extends Factory
{
    protected $model = \App\Models\PuzzleWord::class; // Zorg ervoor dat je het juiste model gebruikt

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'puzzle_id' => \App\Models\Puzzle::factory(),
            'word_id' => \App\Models\Word::factory(), // Maak een nieuwe word aan
            'position' => $this->faker->numberBetween(1, 10), // Willekeurige positie
            'difficulty_level' => $this->faker->numberBetween(1, 5), // Willekeurig moeilijkheidsniveau
        ];
    }
}
