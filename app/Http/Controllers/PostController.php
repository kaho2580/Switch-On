<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
        public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);  
    }
    
        public function store(Request $request, Post $post)
{
    $input = $request['posts'];
    $post->fill($input)->save();
    return redirect('/' );
}
}
