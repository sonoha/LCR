<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Datebase\Eloquent\Collection;

class PostController extends Controller
{
    public function InsertPostsDB(Request $request) {
        $data = $request->all();
        // 現在認証されているユーザーのID取得
        $id = Auth::id();
        if($id != null){
        $data['user_id'] = $id;
       
       
        $post = Post::create($data);

        return back();
        }else{
            return redirect()->route('home');;
        }
    }

    public function InsertCommentsDB(Request $request,$post_id) {
        
        $data = $request->all();
        // 現在認証されているユーザーのID取得
        $id = Auth::id();
        if($id != null){
        $data['user_id'] = $id;
        $data['post_id'] = $post_id;
        
        
        $comment = Comment::create($data);
    
        return back();
        }else{
            return redirect()->route('home');;
        }

    
    }

    public function test($page){
        return view('post')->with(compact('page'));
    }
}

