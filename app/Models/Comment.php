<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $primaryKey = 'comment_id';

    public function post()
    {
        return $this->belongsTo(Post::class, 'comment_post_id', 'post_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'comment_user_id');
    }
}
