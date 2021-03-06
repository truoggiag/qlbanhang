<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateStoreBrandPost extends FormRequest
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
        $id = $request->hddIdBrand;
        return [
            'nameBrand' => 'required|max:100|unique:brands,name,'.$id,
            'descBrand' => 'required'
        ];

    }

    
    public function messages()
    {
        return [
            'nameBrand.required' => 'Ten thuong hieu khong duoc trong',
            'nameBrand.max' => 'Ten thuong hieu khong vuot qua :max ky tu',
            'nameBrand.unique' => 'Ten thuong hieu da ton tai',
            'descBrand.required' => 'Mieu ta ve thuong hieu khong duoc trong'
        ];
    }
}
