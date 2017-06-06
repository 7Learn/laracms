<?php

namespace App;

use App\Models\Post;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'full_name',
//        'email',
//        'password',
//    ];

    protected $guarded = ['role'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

//    public function getWalletAttribute($value)
//    {
//        return number_format($value);
//    }

    public function setWalletAttribute($value){
        $this->attributes['wallet'] = str_replace(',','',$value);
    }


    public function posts()
    {
        return $this->hasMany(Post::class,'post_user_id');
    }
}
