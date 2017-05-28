<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserEditRequest extends FormRequest
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
        $edit_user_id = null;
        if(Request::has('user_id') && ctype_digit(Request::input('user_id'))){
            $edit_user_id = Request::input('user_id');
        }

        return [
            'full_name' => 'required',
            'email' => 'required|email|unique:users,email,'.$edit_user_id,
            'password' => 'min:8|confirmed:password_confirmation',
            'password_confirmation' => 'min:8',
            'wallet' => 'required',
            'role' => 'required|numeric'
        ];
    }
}
