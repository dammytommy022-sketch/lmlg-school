<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slides = Slider::orderBy('sort_order')->orderBy('id')->paginate(15);

        return view('pages.admin.sliders.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $slide = new Slider();

        return view('pages.admin.sliders.create', compact('slide'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validated($request);

        $data['image'] = $request->file('image')->store('sliders', 'public');

        Slider::create($data);

        return redirect()->route('admin.sliders.index')
            ->with('status', 'Slide created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('pages.admin.sliders.edit', ['slide' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $data = $this->validated($request, false);

        if ($request->hasFile('image')) {
            if ($slider->image && ! str_starts_with($slider->image, 'assets/')) {
                Storage::disk('public')->delete($slider->image);
            }

            $data['image'] = $request->file('image')->store('sliders', 'public');
        }

        $slider->update($data);

        return redirect()->route('admin.sliders.index')
            ->with('status', 'Slide updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        if ($slider->image && ! str_starts_with($slider->image, 'assets/')) {
            Storage::disk('public')->delete($slider->image);
        }

        $slider->delete();

        return redirect()->route('admin.sliders.index')
            ->with('status', 'Slide deleted successfully.');
    }

    protected function validated(Request $request, bool $imageRequired = true): array
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'button1_label' => 'nullable|string|max:100',
            'button1_link' => 'nullable|string|max:255',
            'button2_label' => 'nullable|string|max:100',
            'button2_link' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
            'image' => ($imageRequired ? 'required' : 'nullable').'|image|max:4096',
        ]) + ['is_active' => $request->boolean('is_active')];
    }
}
