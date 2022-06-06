<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as LaravelFormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use function App\Helpers\ko;

abstract class FormRequest extends LaravelFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    abstract public function rules();


    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->toArray();
        foreach ($errors as $error) {
            throw new HttpResponseException(ko($error[0]));
        }
    }
}
