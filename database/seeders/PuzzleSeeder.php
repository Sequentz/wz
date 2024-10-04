<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PuzzleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Puzzle::factory()->count(5)->create(); // Maak 5 puzzels aan
    }
}
