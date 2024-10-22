<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Modify this if you want to add authorization logic.
    }

    public function rules()
    {
        return [
            'category' => 'required|string|max:255',
        ];
    }
}
