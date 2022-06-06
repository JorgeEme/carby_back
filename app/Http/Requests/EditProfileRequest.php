<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Http\Requests\FormRequest;

class EditProfileRequest extends FormRequest
{

    public function rules()
    {
        return User::$editProfileRules;
    }
}
