<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            //
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'name' => 'required'

        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'email bat buoc',
            'password.required' => 'password bat buoc',
            'email.unique' => 'email da ton tai',
            'name.required' => "Ten bat buoc"

        ];
    }
}
