<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest('published_at')->paginate(15);

        return view('pages.admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = new Post();

        return view('pages.admin.posts.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validated($request);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news', 'public');
        }

        Post::create($data);

        return redirect()->route('admin.posts.index')
            ->with('status', 'Post created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('pages.admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $this->validated($request, $post);

        if ($request->hasFile('image')) {
            if ($post->image && ! str_starts_with($post->image, 'assets/')) {
                Storage::disk('public')->delete($post->image);
            }

            $data['image'] = $request->file('image')->store('news', 'public');
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')
            ->with('status', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image && ! str_starts_with($post->image, 'assets/')) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('status', 'Post deleted successfully.');
    }

    protected function validated(Request $request, ?Post $post = null): array
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'author' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string',
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'published_at' => 'nullable|date',
            'is_published' => 'boolean',
        ]) + ['is_published' => $request->boolean('is_published')];
    }
}
