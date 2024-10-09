<?php

namespace App\Http\Controllers;
use App\Models\Post;


class PostController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();

        return view('blog', compact('posts'));
    }

}
