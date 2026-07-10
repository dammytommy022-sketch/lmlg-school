<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageSection;
use Illuminate\Http\Request;

class PageSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pages = PageSection::query()->distinct()->orderBy('page')->pluck('page');

        $page = $request->get('page', $pages->first());

        $sections = PageSection::forPage($page)->orderBy('id')->get();

        return view('pages.admin.page-sections.index', compact('pages', 'page', 'sections'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PageSection $page_section)
    {
        return view('pages.admin.page-sections.edit', ['section' => $page_section]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PageSection $page_section)
    {
        $data = $request->validate([
            'heading' => 'nullable|string|max:255',
            'heading_accent' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'body' => 'nullable|string',
            'cta_label' => 'nullable|string|max:100',
            'cta_link' => 'nullable|string|max:255',
        ]);

        $page_section->update($data);

        return redirect()->route('admin.page-sections.index', ['page' => $page_section->page])
            ->with('status', 'Section updated successfully.');
    }
}
