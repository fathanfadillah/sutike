<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class AccountSettingsRequest extends FormRequest
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
            'name'          =>  'required|string|min:4',
            'phone_number'  =>  'required',
            'email'         =>  'required|string|email|unique:users,email,'.Auth::user()->id,
            'old_password'  =>  'nullable|string',
            'password'      =>  'nullable|string|min:8|different:old_password|confirmed'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'password.different' => 'A new password and old password must be different.',
            'password.confirmed' => 'A new password confirmation does not match.',
            'password.min' => 'A new password must be at least 8 characters.'
        ];
    }
}
