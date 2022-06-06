<?php

namespace App\Http\Requests;

use App\Models\Issue;
use App\Http\Requests\FormRequest;

class IssueRequest extends FormRequest
{

    public function rules()
    {
        return Issue::$createRules;
    }
}
