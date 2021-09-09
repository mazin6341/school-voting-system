<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    function createPost(Request $req){
        $req->validate(['postName'=>'required']);
        $req->validate(['voteCode'=>'required | max:1 | min:1']);
        $convCode = strtolower($req->input('voteCode'));
        $post = new Post;
        $post->post_name = $req->input('postName');
        $post->vote_code = $req->input('voteCode');
        $post->save();
        return redirect()->route('posts.view');
    }

    function viewPosts(){
        $posts = DB::table('posts')->get();
        return view('createpost', ['posts' => $posts]);
    }
}
