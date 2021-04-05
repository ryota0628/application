<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'register.votes' => 'required|integer|max:40',
            'register.theme' => 'required|string|max:300',
            'register.description' => 'required|string|max:1000',
        ];
    }
}