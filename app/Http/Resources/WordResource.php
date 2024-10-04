<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WordResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'word' => $this->word,

        ];
    }
}
