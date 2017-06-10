<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $primaryKey = 'category_id';

    protected $guarded = ['category_id'];


    public function posts()
    {
        return $this->belongsToMany(Post::class,'post_category','category_id','post_id');
    }
}
