<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateSurvey4 extends Request
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
            'd1' => 'required',
            'd2' => 'required',
            'd3' => 'required',
            'd4' => 'required',
            'd5' => 'required',
            'd6' => 'required',
            'd7' => 'required',
            'd8' => 'required',
            'd9' => 'required',
            'd10' => 'required',
            'd11' => 'required',
            'd12' => 'required',
            'd13' => 'required',
            'd14' => 'required',
            'd15' => 'required',
            'd16' => 'required',
            'd17' => 'required',
            'd18' => 'required',
            'd19' => 'required',
            'd20' => 'required',
            'd21' => 'required',
        ];
    }
}
