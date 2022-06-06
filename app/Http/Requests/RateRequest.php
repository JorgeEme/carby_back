<?php

namespace App\Http\Requests;

use App\Models\Review;
use App\Http\Requests\FormRequest;

class RateRequest extends FormRequest
{

    public function rules()
    {
        return Review::$createRules;
    }
}
