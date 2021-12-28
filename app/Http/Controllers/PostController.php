<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post', [
            'title' => 'All Posts',
            'posts' => Post::latest()->get(),
            'active' => 'blog'
        ]);
    }

    public function show(Post $post)
    {
        return view('singlepost', [
            'title' => 'Single Post',
            'post' => $post,
            'active' => 'blog'
        ]);
    }
}
