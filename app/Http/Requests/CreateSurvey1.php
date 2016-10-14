<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateSurvey1 extends Request
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
            'a1' => 'required',
            'a2' => 'required',
            'a3' => 'required',
            'a4' => 'required',
            'a5' => 'required',
            'a6' => 'required',
            'a7' => 'required',
            'a8' => 'required',
            'a9' => 'required',
            'a10' => 'required',
            'a11' => 'required',
            'a12' => 'required',
            'a13' => 'required',
            'a14' => 'required',
            'a15' => 'required',
        ];
    }


}
