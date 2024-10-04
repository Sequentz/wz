<?php

namespace Database\Factories;

use App\Models\Puzzle; // Correcte namespace voor Puzzle
use App\Models\Category; // Correcte namespace voor Category
use Illuminate\Database\Eloquent\Factories\Factory;

class PuzzleFactory extends Factory
{
    protected $model = Puzzle::class; // Verbindt de factory met het model

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(), // Maak een nieuwe categorie aan
            'name' => $this->faker->sentence(3), // Genereert een willekeurige naam
        ];
    }
}
