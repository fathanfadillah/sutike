<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserBillingRequest extends FormRequest
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
            'firstname'     =>  'required|string|min:4',
            'lastname'      =>  'required|string|min:3',
            'country'       =>  'required',
            'address'       =>  'required',
            'province_id'   =>  'nullable',
            'city_id'       =>  'nullable',
            'postal_code'   =>  'nullable|string|min:4',
            'phone_number'  =>  'required',
            'email'         =>  'required|string|email'
        ];
    }
}
