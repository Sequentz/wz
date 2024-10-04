<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('puzzle_word', function (Blueprint $table) {
            $table->id();

            $table->foreignId('puzzle_id')
                ->constrained('puzzles')
                ->onDelete('cascade');
            $table->foreignId('word_id')
                ->constrained('words')
                ->onDelete('cascade');

            $table->integer('position')->nullable();
            $table->integer('difficulty_level')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('puzzle_word');
    }
};
