<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Http\Requests\FormRequest;

class ChangePasswordRequest extends FormRequest
{

    public function rules()
    {
        return User::$changePasswordRules;
    }
}
