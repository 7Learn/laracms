<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed:password_confirmation',
            'password_confirmation' => 'required',
            'wallet' => 'required|numeric',
            'role' => 'required|numeric'
        ];
    }

    public function messages()
    {
      return [
          'full_name.required' => 'نام کاربری الزامی می باشد',
          'email.required' => 'ایمیل الزامی می باشد',
          'email.email' => 'ایمیل باید به صورت صحیح وارد شود',
          'email.unique' => 'ایمیل وارد شده قبلا استفاده شده است',
          'password.required' => 'کلمه عبور الزامی می باشد',
          'password.min' => 'حداقل تعداد کاراکتر برای کلمه عبور ۸  می باشد',
          'password.confirmed' => 'کلمه عبور وارد شده تطبیق ندارد',
          'password_confirmation.required' => 'تکرار کلمه عبور الزامی می باشد',
          'wallet.required' => 'میزان موجودی الزامی می باشد',
          'wallet.numeric' => 'میزان موجودی باید به صورت عددی باشد.',
          'role.required' => 'نقش کاربری الزامی می باشد',
          'role.numeric' => 'نقش کاربری باید به صورت عددی باشد',

      ];
    }
}
