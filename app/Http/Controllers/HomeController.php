<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Morilog\Jalali\jDate;

class HomeController extends Controller
{

    public function index(){
//        dd(jDate::forge('today')->format('Y-m-d H:i:s'));
        $all_posts = Post::paginate(3);
        return view('user.index',compact('all_posts'));
    }

    public function show(Request $request,$post_id)
    {
//        $request->getClientIp()
        $post =  Post::find($post_id);
        $post->increment('post_view_count');
//        $post = Post::where('post_slug',$post_slug)->get();
        return view('user.show',compact('post'));
    }

    public function displayCats($cat_id)
    {
        $cat = Category::find($cat_id);
        $all_posts = $cat->posts()->get();
        return view('user.index',compact('all_posts'));
    }
}
