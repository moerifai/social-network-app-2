<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsComments extends Model
{
    public $timestamps = true;
    protected $table = 'user_post_comments';
    protected $guarded = ['id'];

    public function postsCom()
    {
        return $this->hasOne(Post::class);
    }
}
