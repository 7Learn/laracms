<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'post_id';

    protected $dates = ['published_at'];

    protected $guarded = ['post_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'post_user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category', 'post_id', 'category_id');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'comment_post_id','post_id');
    }
}
