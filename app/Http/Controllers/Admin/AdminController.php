<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $stat = [
            'total_users' => 124,
            'total_comments' => 256,
            'total_posts' => 876
        ];
        $page_data = [
            'panel_title' => 'داشبورد'
        ];
        return view('admin.dashboard.index')->with(['data'=>$stat,'page_data' => $page_data]);
    }

    public function edit()
    {
        dd('in edit');
    }
}
