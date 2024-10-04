<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
    ];

    /**
     * De puzzels die bij deze categorie horen.
     */
    public function puzzles()
    {
        return $this->hasMany(Puzzle::class);
    }
}
