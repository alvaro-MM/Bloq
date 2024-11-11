<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use function Pest\Laravel\get;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $posts = Post::where('published_at', '<=', now())->get();


        return view('Posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('Posts.show', compact('post'));
    }

    public function create()
    {
        $post = new Post();
        return view('Posts.create', ['post' => $post]);

    }

    public function store(StorePostRequest $request)
    {

        auth()->user()->posts()->create($request->validated());
        return to_route('myPost')
            ->with('status', 'Posts created successfully!');
    }

    public function edit(Post $post){

        return view('Posts.edit', compact('post'));
    }
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return to_route('post.show', $post->id)
            ->with('status', 'Post updated successfully!');
    }

    public function destroy (Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status', 'Post deleted successfully!');
    }


    public function show2()
    {
        $user = auth()->user();
        $posts = Post::where('user_id', $user->id )->get();
        return view('myPostPublished', compact('posts'));
    }

}
