@extends('layouts.admin.app')

@section('content')

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> News &amp; Updates</a>
            </li>
            <li class="page-back"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <!--== Posts List ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title d-flex justify-content-between align-items-center">
                        <div>
                            <h4>All Posts</h4>
                            <p>News, alumni highlights, and updates shown on the public site.</p>
                        </div>
                        <a href="{{ route('admin.posts.create') }}" class="ad-st-view">Add New Post</a>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success mt-2">{{ session('status') }}</div>
                    @endif

                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Published</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($posts as $post)
                                        <tr>
                                            <td><span class="list-enq-name">{{ $post->title }}</span></td>
                                            <td>{{ $post->category ?: '—' }}</td>
                                            <td>{{ $post->author ?: '—' }}</td>
                                            <td>{{ optional($post->published_at)->format('d M Y') ?? '—' }}</td>
                                            <td>
                                                @if ($post->is_published)
                                                    <span class="label label-success">Published</span>
                                                @else
                                                    <span class="label label-default">Draft</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.posts.edit', $post) }}" class="ad-st-view">Edit</a>
                                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this post?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="ad-st-view" style="border:0;">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">No posts found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
