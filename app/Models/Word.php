<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Word extends Model
{
    use HasFactory;
    use Sortable;

    protected $fillable = [
        'word',
        'category_id',
    ];
    public function puzzles()
    {
        return $this->belongsToMany(Puzzle::class);
    }
}
