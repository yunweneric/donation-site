<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function index(){
    //     return view('post.index');
    // }
    public function index(){
        $posts = Post::paginate(5);
        return view('post.index', ['posts'=>$posts]);
    }

    public function addpost(){
        return view('post.addpost');
    }
    
    public function store(Request $request){
        post::create($request->all());
        return redirect('posts');
    }
    
}
