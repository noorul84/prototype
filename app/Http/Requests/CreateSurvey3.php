<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateSurvey3 extends Request
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
    public function rules()
    {
        return [
            'c1' => 'required',
            'c2' => 'required',
            'c3' => 'required',
            'c4' => 'required',
            'c5' => 'required',
            'c6' => 'required',
            'c7' => 'required',
            'c8' => 'required',
            'c9' => 'required',
            'c10' => 'required',
            'c11' => 'required',
        ];
    }
}
