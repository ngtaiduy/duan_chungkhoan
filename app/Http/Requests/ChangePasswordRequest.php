<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChangePasswordRequest extends FormRequest
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
            'password' => 'required|min:8',
            'newpassword' => 'required|min:8',
            'newpassword2' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Hãy nhập mật khẩu',
            'password.min' => 'Mật khẩu tối thiểu 8 ký tự',
            'newpassword.required' => 'Hãy nhập mật khẩu mới',
            'newpassword.min' => 'Mật khẩu mới tối thiểu 8 ký tự',
            'newpassword2.required' => 'Hãy nhập lại mật khẩu mới',
            'newpassword2.min' => 'Mật khẩu mới nhập lại tối thiểu 8 ký tự',
        ];
    }
}
