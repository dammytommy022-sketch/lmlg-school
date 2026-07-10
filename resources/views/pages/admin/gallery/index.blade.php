@extends('layouts.admin.app')

@section('content')

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Gallery</a>
            </li>
            <li class="page-back"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <!--== Gallery List ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title d-flex justify-content-between align-items-center">
                        <div>
                            <h4>Gallery Images</h4>
                            <p>Photos shown on the Gallery page and the homepage gallery preview.</p>
                        </div>
                        <a href="{{ route('admin.gallery.create') }}" class="ad-st-view">Add New Image</a>
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
                                        <th>Category</th>
                                        <th>Order</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($images as $image)
                                        <tr>
                                            <td><span class="list-img"><img src="{{ $image->image_url }}" alt="{{ $image->title }}"></span></td>
                                            <td>{{ $image->title ?: '—' }}</td>
                                            <td>{{ $image->category_label }}</td>
                                            <td>{{ $image->sort_order }}</td>
                                            <td>
                                                <a href="{{ route('admin.gallery.edit', $image) }}" class="ad-st-view">Edit</a>
                                                <form action="{{ route('admin.gallery.destroy', $image) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this image?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="ad-st-view" style="border:0;">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">No images found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $images->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
