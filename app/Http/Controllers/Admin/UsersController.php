<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Utility\UserUtility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index(Request $request)
    {

        $page_data = [
            'panel_title' => 'کاربران'
        ];
        $users = User::all();
        return view('admin.users.index', compact('users'))->with(['page_data' => $page_data]);
    }

    public function create()
    {
        $page_data = [
            'panel_title' => 'ایجاد کاربر جدید'
        ];
        $user_roles = UserUtility::get_roles();
        return view('admin.users.create', compact('page_data', 'user_roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|password_confirmation',
            'password_confirmation' => 'required',
            'wallet' => 'required|numeric',
            'role'   => 'required|numeric'
        ], [
                'full_name.required' => 'نام کاربری الزامی می باشد'
        ]);
    }
}
