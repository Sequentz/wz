<?php

namespace Database\Factories;

use App\Models\Category; // Zorg ervoor dat deze import correct is
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => $this->faker->word, // Genereer een willekeurige categorie
        ];
    }
}
