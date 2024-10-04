<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Word::factory()->count(10)->create(); // Maak 10 woorden aan
    }
}
