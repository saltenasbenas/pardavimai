<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
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
            'recommendation'=> 'required',
            'speed'=> 'required',
            'contract_no'=> 'required|numeric| min:3|max:10000000000000000000000000000000000000000000000000000000',
            'service'=> 'required',
            'comments'=> 'required| min:1|max:100',
            'agreement'=> 'required',
            'employee_id'=> 'required|numeric',

        ];
    }
}
