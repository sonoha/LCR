<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsInsert extends Model
{
    protected $fillable = ['user_id','content', 'snippet', 'post_id'];
}

