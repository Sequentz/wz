<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWordRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Modify this if you want to add authorization logic.
    }

    public function rules()
    {
        return [
            'word' => 'required|string|max:255', // 'word' should be a required string with a max length of 255
        ];
    }
}
