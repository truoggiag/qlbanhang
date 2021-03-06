<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class StoreCoupon extends FormRequest
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
    public function rules(Request $request)
    {
        
        return [
            'code' => 'required|unique:coupons,code,',
            'status' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'code.required' => 'Mã coupon không được để trống',
            'code.unique' => 'Mã code là duy nhất',
            'status.required' => 'Trường này không được để trống',
            
        ];
    }
}
