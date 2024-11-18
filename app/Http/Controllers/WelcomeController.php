<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::whereNotNull('published_at')->get()->sortByDesc('published_at');
        return view('welcome')->with('posts', $posts);
    }
}