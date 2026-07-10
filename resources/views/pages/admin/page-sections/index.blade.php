@extends('layouts.admin.app')

@section('content')

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Page Content</a>
            </li>
            <li class="page-back"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <!--== Page Sections List ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Page Content</h4>
                        <p>Edit the heading, subheading, body text, and call-to-action for each section of the public pages.</p>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success mt-2">{{ session('status') }}</div>
                    @endif

                    <div class="tab-inn">
                        <ul class="filters" style="list-style:none; padding:0; margin:15px 0;">
                            @foreach ($pages as $pageOption)
                                <li style="display:inline-block; margin-right:8px;">
                                    <a href="{{ route('admin.page-sections.index', ['page' => $pageOption]) }}"
                                       class="btn {{ $pageOption === $page ? 'active' : '' }}">
                                        {{ ucfirst($pageOption) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Section</th>
                                        <th>Heading</th>
                                        <th>Subheading</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($sections as $section)
                                        <tr>
                                            <td><span class="list-enq-name">{{ $section->section_key }}</span></td>
                                            <td>{{ $section->heading }} {{ $section->heading_accent }}</td>
                                            <td>{{ $section->subheading }}</td>
                                            <td>
                                                <a href="{{ route('admin.page-sections.edit', $section) }}" class="ad-st-view">Edit</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">No sections found for this page.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
