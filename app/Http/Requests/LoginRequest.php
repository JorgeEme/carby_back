<?php

namespace App\Http\Requests;

use App\Models\User;
// use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\FormRequest;
class LoginRequest extends FormRequest
{

    public function rules()
    {
        return User::$loginRules;
    }

    public function messages()
    {
        return [
            'email.required' => 'A title is required',
            'email.string' => 'A message is required',
            'email.email' => 'A message is required',
        ];
    }
}
