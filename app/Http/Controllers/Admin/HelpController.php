<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpController extends Controller
{
    public function index($id = null)
    {
        if(isset($id)){
            return 'Admin Help:'.$id;
        }
        return 'Admin Help';
    }
}
