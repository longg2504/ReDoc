<?php

namespace App\Http\Requests\Client\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SingupRequest extends FormRequest
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
            'username' => 'bail|required|regex:/^[a-zA-Z0-9]*$/',
            'email' => 'bail|required|email',
            'address' => 'bail|required',
            'district' => 'bail|required',
            'age' => 'bail|numeric|min:1|max:99',
            'password' => 'bail|required',
            'repassword' => 'bail|required|same:password',
        ];
    }


    public function attributes()
    {
        return [
            'email' => 'Email',
            'password'  => 'Mật khẩu',
            'username' => 'Tên tài khoản',
            'address' => 'Địa chỉ',
            'city' => 'Thành phố',
            'age' => 'Tuổi',
            'repassword' => 'Mật khẩu xác nhận'
        ];
    }
}
