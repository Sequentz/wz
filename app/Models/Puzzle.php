<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puzzle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'word_id',
    ];
    public function words()
    {
        return $this->belongsToMany(Word::class);
    }
}
