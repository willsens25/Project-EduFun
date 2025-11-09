<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'latest_posts' => Post::with(['writer', 'category'])
                                ->latest('published_at')
                                ->take(2)
                                ->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post_detail', [
            'title' => $post->title,
            'post' => $post
        ]);
    }

    public function popular()
    {
        return view('popular', [
            'title' => 'Popular Articles',
            'popular_posts' => Post::with(['writer', 'category'])
                                ->latest('published_at')
                                ->paginate(3)
        ]);
    }
}