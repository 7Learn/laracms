<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table='videos';
    protected $primaryKey= 'video_id';
    protected $guarded = ['video_id'];

    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }
}
