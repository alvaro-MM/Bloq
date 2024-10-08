<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __invoke()
    {
        $posts = DB::table('posts')->get();
        
        return view('blog', compact('posts'));
    }

}
