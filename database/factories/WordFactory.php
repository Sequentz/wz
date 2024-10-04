<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WordFactory extends Factory
{
    protected $model = \App\Models\Word::class; // Zorg ervoor dat je het juiste model gebruikt

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'word' => $this->faker->word, // Genereer een willekeurig woord
        ];
    }
}
