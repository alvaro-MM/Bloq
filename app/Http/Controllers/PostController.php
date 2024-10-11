<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('Posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('Posts.show', compact('post'));
    }

    public function create()
    {

        return view('Posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        session()->flash('status', 'Posts created successfully!');
        //return redirect()->route('posts.index');
        return to_route('post.index');
    }

    public function edit(Post $post){

        return view('Posts.edit', compact('post'));
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required',
        ]);

    }
}
