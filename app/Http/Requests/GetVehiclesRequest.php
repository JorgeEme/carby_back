<?php

namespace App\Http\Requests;

use App\Http\Requests\FormRequest;
use App\Models\Vehicle;

class GetVehiclesRequest extends FormRequest
{

    public function rules()
    {
        return Vehicle::$getVehiclesRules;
    }
}
