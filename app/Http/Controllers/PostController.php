<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function posts()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function postDetail(Post $post)
    {
        return view('detail', compact('post'));
    }
}
