<?php

namespace App\Http\Requests;

use App\Http\Requests\FormRequest;
use App\Models\Journey;

class PaymentJourneyRequest extends FormRequest
{


    public function rules()
    {
        return Journey::$createRules;
    }
}
