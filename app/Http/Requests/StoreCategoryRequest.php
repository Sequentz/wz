<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'category' => 'required|string|max:255',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
