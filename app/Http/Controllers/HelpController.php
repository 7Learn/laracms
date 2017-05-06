<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index($id=null)
    {

        if(isset($id)){
            return 'Help : ' . $id;
        }

        return 'Help';
    }
}
