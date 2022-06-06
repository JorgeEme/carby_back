<?php

namespace App\Http\Requests;

use App\Http\Requests\FormRequest;
use App\Models\User;

class RegisterRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return User::$registerRules;
    }
}
