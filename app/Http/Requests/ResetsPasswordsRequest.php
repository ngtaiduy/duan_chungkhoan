<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules;

class ResetsPasswordsRequest extends FormRequest
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
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages()
    {
        return [
            'token.required' => 'a1',
            'email.required' => 'Hãy nhập Email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Hãy nhập mật khẩu',
            'password.confirmed' => 'Mật khẩu nhập lại không trùng',
        ];
    }
}
