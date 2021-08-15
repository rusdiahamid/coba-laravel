<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "About",
            "name" => "Rusdia Hamid",
            "email" => "rusdia.hamid@gmail.com",
            "image" => "rusdia.jpg"
        ]);
    }
}
