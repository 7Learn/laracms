<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\User;
use App\Utility\UserUtility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function __construct()
    {

    }

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

    public function store(UserCreateRequest $userCreateRequest)
    {
        $createdUser = User::create($userCreateRequest->except(['password_confirmation']));
        if ($createdUser instanceof User) {
            return redirect()->route('admin.users.index')->with(['successInsert' => true]);
        }
    }

    public function remove(Request $request, $user_id)
    {
//        dd(decrypt($user_id));
        if (ctype_digit($user_id)) {
            $user = User::find($user_id);
            if (is_null($user)) {
                return redirect()
                    ->route('admin.users.index')
                    ->with('failDelete', true);
            }
            $result = $user->delete();
            if ($result) {
                return redirect()
                    ->route('admin.users.index')
                    ->with('successDeleted', true);
            }
        }
    }

    public function edit($user_id)
    {
        if (!ctype_digit($user_id)) {

        }

//        $users = User::find([3,4,5,6]);
        $user = User::find($user_id);
        $page_data = [
            'panel_title' => 'ویرایش کاربر'
        ];

        $user_roles = UserUtility::get_roles();
        return view('admin.users.edit', compact('user', 'user_roles', 'page_data'));
    }

    public function update(UserEditRequest $userEditRequest, $user_id)
    {
        $inputs = $userEditRequest->except('user_id');

        if (!$userEditRequest->has('password')) {

            $inputs = $userEditRequest->except(['password', 'password_confirmation','user_id']);
        }
        $updated_user = User::find($user_id)->update($inputs);
        return redirect()->route('admin.users.index');
    }
}
