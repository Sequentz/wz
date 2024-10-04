<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PuzzleWord extends Pivot
{

    protected $table = 'puzzle_word';


    public $timestamps = true;


    protected $fillable = [
        'puzzle_id',
        'word_id',
        'position',
        'difficulty_level',
    ];

    /**
     * De relatie met het Puzzle model.
     */
    public function puzzle()
    {
        return $this->belongsTo(Puzzle::class);
    }

    /**
     * De relatie met het Word model.
     */
    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
