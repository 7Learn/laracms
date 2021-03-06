<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Post;
use App\User;
use App\Utility\PostUtility;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {

        $posts = Post::with('user')->paginate(10);
        $page_data = [
            'panel_title' => 'لیست مطالب'
        ];
        return view('admin.posts.index',compact('posts','page_data'));

    }

    public function create()
    {

        $post_status = PostUtility::get_statuses();
        $categories = Category::all();
        $page_data = [
            'panel_title' => 'ایجاد مطلب جدید'
        ];
        return view('admin.posts.create',compact('page_data','post_status','categories'));
    }

    public function store(Request $request)
    {
        $post_data = $request->except('post_categories');
        //Auth::user()->id;
        $currentUser = User::find(4);
        //$currentUser->posts()->create($post_data);
        $file = $request->file('post_thumbnail');
        $new_file_name = microtime(true).".".$file->getClientOriginalExtension();
        $request->file('post_thumbnail')->storeAs('images',$new_file_name);
        $post_data['post_thumbnail'] = $new_file_name;
        $post_data['post_slug'] = PostUtility::generate_slug($post_data['post_title']);
        $post_data['post_user_id'] = 4;
        $new_post = Post::create($post_data);
        if($new_post instanceof Post){
            $new_post->tags()->attach(array_values($request->input('post_categories')));
        }


    }
}
