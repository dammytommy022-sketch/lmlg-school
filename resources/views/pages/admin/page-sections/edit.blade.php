@extends('layouts.admin.app')

@section('content')

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li><a href="{{ route('admin.page-sections.index', ['page' => $section->page]) }}">Page Content</a>
            </li>
            <li class="active-bre"><a href="#"> {{ $section->section_key }}</a>
            </li>
            <li class="page-back"><a href="{{ route('admin.page-sections.index', ['page' => $section->page]) }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Edit Section</h4>
                        <p>{{ ucfirst($section->page) }} &mdash; {{ $section->section_key }}</p>
                    </div>
                    <div class="tab-inn">
                        <form method="POST" action="{{ route('admin.page-sections.update', $section) }}">
                            @csrf
                            @method('PUT')

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <input type="text" name="heading" class="form-control" value="{{ old('heading', $section->heading) }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Heading Accent (highlighted part)</label>
                                        <input type="text" name="heading_accent" class="form-control" value="{{ old('heading_accent', $section->heading_accent) }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Subheading</label>
                                        <input type="text" name="subheading" class="form-control" value="{{ old('subheading', $section->subheading) }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Body</label>
                                        <textarea name="body" rows="8" class="form-control">{{ old('body', $section->body) }}</textarea>
                                        <small class="text-muted">Separate paragraphs with a blank line.</small>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Button Label</label>
                                        <input type="text" name="cta_label" class="form-control" value="{{ old('cta_label', $section->cta_label) }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Button Link</label>
                                        <input type="text" name="cta_link" class="form-control" value="{{ old('cta_link', $section->cta_link) }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Section</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
