<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'comment' => 'required',
            'address' => 'required',
            'location' => 'required',
            'image' => 'required',
        ];
    }
}