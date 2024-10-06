<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'word' => 'required|string|max:255',

        ];
    }

    public function authorize()
    {
        return true;
    }
}
