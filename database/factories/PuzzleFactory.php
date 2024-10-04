<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PuzzleFactory extends Factory
{
    protected $model = \App\Models\Puzzle::class; // Zorg ervoor dat je het juiste model gebruikt

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => \App\Models\Category::factory(), // Maak een nieuwe category aan
        ];
    }
}
