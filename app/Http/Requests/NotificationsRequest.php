<?php

namespace App\Http\Requests;

use App\Http\Requests\FormRequest;
use App\Models\User;

class NotificationsRequest extends FormRequest
{

    public function rules()
    {
        return User::$updateNotificationsRules;
    }
}
