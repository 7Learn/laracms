<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'post_id';


    protected $dates = ['published_at'];

//    const UPDATED_AT = '';
//    const CREATED_AT = '';

    protected $fillable = [
        'post_title',
        'post_content',
        'post_slug',
        'post_user_id',
        'post_thumbnail',
        'post_status'
    ];
//    protected $guarded = [];

//    protected $dates = [
//        'expired_at'
//    ];

//    public $incrementing =false;


    public function user()
    {
        return $this->belongsTo(User::class, 'post_user_id');
    }
}
