@extends('layouts.admin.app')

@section('content')

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li><a href="{{ route('admin.posts.index') }}">News &amp; Updates</a>
            </li>
            <li class="active-bre"><a href="#"> Add New Post</a>
            </li>
            <li class="page-back"><a href="{{ route('admin.posts.index') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Add New Post</h4>
                        <p>Create a new news item, alumni highlight, or update for the public site.</p>
                    </div>
                    <div class="tab-inn">
                        <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                            @include('pages.admin.posts._form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
