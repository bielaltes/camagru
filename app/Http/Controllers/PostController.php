<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view(
            'post.index',
            ['posts' => Post::with('user')->latest()->paginate(10),
            ]
        );
    }

    public function show(Post $post)
    {
        return view(
            'post.show',
            ['post' => $post->load('comments'),
            ]
        );
    }
}