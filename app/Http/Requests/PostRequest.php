<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'register.theme' => 'required|string|max:30',
            'register.description' => 'required|string|max:1000',
        ];
    }
}