<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\User;

class DetailController extends Controller
{
    public function show($post_id)
    {
      $posts = Post::find($post_id);
      $users = User::find($posts->user_id);
      $comments = Comment::select()
      ->join('users','comments.user_id','=','id')
      ->where('post_id',$post_id)
      ->orderBy('commented_at')
      ->get();

      return view('detail')->with(compact('posts','users','comments'));
    }
}
