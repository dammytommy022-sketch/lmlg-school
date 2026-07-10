<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = GalleryImage::orderBy('sort_order')->orderBy('id')->paginate(15);

        return view('pages.admin.gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $image = new GalleryImage();

        return view('pages.admin.gallery.create', compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validated($request);

        $data['image'] = $request->file('image')->store('gallery', 'public');

        GalleryImage::create($data);

        return redirect()->route('admin.gallery.index')
            ->with('status', 'Image added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GalleryImage $gallery)
    {
        return view('pages.admin.gallery.edit', ['image' => $gallery]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GalleryImage $gallery)
    {
        $data = $this->validated($request, false);

        if ($request->hasFile('image')) {
            if ($gallery->image && ! str_starts_with($gallery->image, 'assets/')) {
                Storage::disk('public')->delete($gallery->image);
            }

            $data['image'] = $request->file('image')->store('gallery', 'public');
        }

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')
            ->with('status', 'Image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GalleryImage $gallery)
    {
        if ($gallery->image && ! str_starts_with($gallery->image, 'assets/')) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return redirect()->route('admin.gallery.index')
            ->with('status', 'Image deleted successfully.');
    }

    protected function validated(Request $request, bool $imageRequired = true): array
    {
        return $request->validate([
            'title' => 'nullable|string|max:255',
            'category' => 'required|in:'.implode(',', array_keys(GalleryImage::CATEGORIES)),
            'sort_order' => 'nullable|integer',
            'image' => ($imageRequired ? 'required' : 'nullable').'|image|max:2048',
        ]);
    }
}
