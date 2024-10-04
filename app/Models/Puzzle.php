<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puzzle extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
    ];

    /**
     * De categorie die bij de puzzel hoort.
     */
    public function category()
    {
        return $this->belongsTo(Category::class); // Definieert de relatie met de Category model
    }
}
