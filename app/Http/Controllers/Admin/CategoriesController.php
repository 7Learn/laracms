<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoriesController extends Controller
{
    public function index()
    {
        $page_data = [
            'panel_title' => 'لیست دسته بندی ها'
        ];
        $categories = Category::all();
        return view('admin.categories.index',compact('page_data','categories'));
    }
}
