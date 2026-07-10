<?php

namespace App\Http\Controllers;

use App\Models\Post;

class NewsController extends Controller
{
    public function index()
    {
        $latestPosts = Post::published()
            ->where('category', 'Latest News')
            ->latest('published_at')
            ->take(3)
            ->get();

        $highlights = Post::published()
            ->where('category', 'Recent Highlight')
            ->latest('published_at')
            ->take(4)
            ->get();

        return view('pages.news', [
            'latestPosts' => $latestPosts,
            'highlights' => $highlights,
        ]);
    }

    public function show(string $slug)
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();

        $related = Post::published()
            ->where('slug', '!=', $slug)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('pages.news-details', ['post' => $post, 'related' => $related]);
    }
}
