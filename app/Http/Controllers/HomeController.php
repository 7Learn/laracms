<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Morilog\Jalali\jDate;

class HomeController extends Controller
{

    public function index(){
//        dd(jDate::forge('today')->format('Y-m-d H:i:s'));
        return view('user.index');
    }
}
