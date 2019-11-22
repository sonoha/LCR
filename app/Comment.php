<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = "comment_id";
    protected $fillable = ['user_id','content', 'snippet', 'post_id'];
    public $timestamps = false;
}
