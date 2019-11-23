<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;


class TlController extends Controller
{
    public function tl()
    {
        $posts = Post::select()
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

    public function tlAjax($posted_at)
    {
        $posts = Post::where('posted_at','>',$posted_at)
        ->limit(3000)
        ->join('users','posts.user_id','=','id')
        ->orderBy('posted_at','desc')
        ->get();

        foreach($posts as $post){
            $count = Comment::where('post_id','=',$post->post_id)->count();
            $post->count = $count; // add property
        }

        $json = ["posts" => $posts];
        return response()->json($json);
    }

}