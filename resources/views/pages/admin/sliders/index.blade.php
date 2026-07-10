@extends('layouts.admin.app')

@section('content')

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Homepage Slider</a>
            </li>
            <li class="page-back"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <!--== Slides List ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title d-flex justify-content-between align-items-center">
                        <div>
                            <h4>Homepage Slider</h4>
                            <p>Slides shown in the main banner at the top of the homepage.</p>
                        </div>
                        <a href="{{ route('admin.sliders.create') }}" class="ad-st-view">Add New Slide</a>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success mt-2">{{ session('status') }}</div>
                    @endif

                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Order</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($slides as $slide)
                                        <tr>
                                            <td><span class="list-img"><img src="{{ $slide->image_url }}" alt="{{ $slide->title }}"></span></td>
                                            <td>{{ $slide->title }}</td>
                                            <td>{{ $slide->subtitle }}</td>
                                            <td>{{ $slide->sort_order }}</td>
                                            <td>
                                                @if ($slide->is_active)
                                                    <span class="label label-success">Active</span>
                                                @else
                                                    <span class="label label-default">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.sliders.edit', $slide) }}" class="ad-st-view">Edit</a>
                                                <form action="{{ route('admin.sliders.destroy', $slide) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this slide?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="ad-st-view" style="border:0;">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">No slides found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $slides->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
