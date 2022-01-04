<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use app\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::get();
        dd($posts);

        return view('admin.posts.index', compact('posts'));
    }
}
