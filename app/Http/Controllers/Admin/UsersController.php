<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index(Request $request)
    {

        $page_data = [
            'panel_title'   => 'کاربران'
        ];
        $users = User::all();
        return view('admin.users.index')->with(['page_data' => $page_data]);
    }
}
