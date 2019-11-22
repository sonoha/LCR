<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;


class TlController extends Controller
{
    public function tl()
    {
        $posts = \DB::table('posts')
        ->limit(3000)
        ->join('users','posts.user_id','=','id')
        ->orderBy('posted_at','desc')
        ->get();

        foreach($posts as $post){
            $count = Comment::where('post_id','=',$post->post_id)->count();
            $post->count = $count; // add property
        }

        return view('tl')->with(compact('posts'));
    }
}