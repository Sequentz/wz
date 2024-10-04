<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PuzzleWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $puzzles = \App\Models\Puzzle::all(); // Haal alle puzzels op
        $words = \App\Models\Word::all(); // Haal alle woorden op

        foreach ($puzzles as $puzzle) {
            foreach ($words->random(2) as $word) { // Neem 2 willekeurige woorden
                $puzzle->words()->attach($word->id, [
                    'position' => rand(1, 10),
                    'difficulty_level' => rand(1, 5),
                ]);
            }
        }
    }
}
