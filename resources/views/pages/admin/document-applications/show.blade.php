@extends('layouts.admin.app')

@section('content')

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li><a href="{{ route('admin.document-applications.index') }}">Document Applications</a>
            </li>
            <li class="active-bre"><a href="#"> {{ $application->full_name }}</a>
            </li>
            <li class="page-back"><a href="{{ route('admin.document-applications.index') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>{{ $application->full_name }}</h4>
                        <p>Submitted {{ $application->created_at->format('d M Y, h:ia') }}</p>
                    </div>

                    <div class="tab-inn">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Full Name (while in school):</strong><br>{{ $application->full_name }}</p>
                                <p><strong>Year of Graduation:</strong><br>{{ $application->graduation_year }}</p>
                                <p><strong>Date of Birth:</strong><br>{{ $application->dob->format('d M Y') }}</p>
                                <p><strong>Class Teacher:</strong><br>{{ $application->class_teacher ?: '—' }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Document Requested:</strong><br>{{ $application->document_type }}</p>
                                <p><strong>Delivery Option:</strong><br>{{ $application->delivery_option }}</p>
                                <p><strong>Status:</strong><br><span class="label label-default">{{ ucfirst($application->status) }}</span></p>
                                <p><strong>Supporting Identification:</strong><br>
                                    @if ($application->identification_path)
                                        <a href="{{ route('admin.document-applications.download', $application) }}" class="ad-st-view">Download File</a>
                                    @else
                                        <span class="text-muted">No file uploaded</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
