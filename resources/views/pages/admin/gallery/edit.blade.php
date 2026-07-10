@extends('layouts.admin.app')

@section('content')

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li><a href="{{ route('admin.gallery.index') }}">Gallery</a>
            </li>
            <li class="active-bre"><a href="#"> Edit Image</a>
            </li>
            <li class="page-back"><a href="{{ route('admin.gallery.index') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Edit Image</h4>
                        <p>{{ $image->title ?: 'Untitled image' }}</p>
                    </div>
                    <div class="tab-inn">
                        <form method="POST" action="{{ route('admin.gallery.update', $image) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @include('pages.admin.gallery._form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
