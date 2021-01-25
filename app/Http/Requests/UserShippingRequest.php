<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserShippingRequest extends FormRequest
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
            'address_name'  =>  'required|string|min:4',
            'receiver_name' =>  'required|string|min:3',
            'country'       =>  'required',
            'address'       =>  'required',
            'province_id'   =>  'nullable',
            'city_id'       =>  'nullable',
            'phone_number'  =>  'required',
            'postal_code'   =>  'nullable|string|min:4'
        ];
    }
}
