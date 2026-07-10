@extends('layouts.admin.app')

@section('content')

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li><a href="{{ route('admin.alumni-registrations.index') }}">Alumni Database</a>
            </li>
            <li class="active-bre"><a href="#"> {{ $registration->school_name }}</a>
            </li>
            <li class="page-back"><a href="{{ route('admin.alumni-registrations.index') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>{{ $registration->school_name }}</h4>
                        <p>Registered {{ $registration->created_at->format('d M Y, h:ia') }}</p>
                    </div>

                    <div class="tab-inn">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Full Name (During School Years):</strong><br>{{ $registration->school_name }}</p>
                                <p><strong>Current Name:</strong><br>{{ $registration->current_name ?: '—' }}</p>
                                <p><strong>Year of Graduation/Class Set:</strong><br>{{ $registration->class_set }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Country of Residence:</strong><br>{{ $registration->country }}</p>
                                <p><strong>Contact Information:</strong><br>{{ $registration->contact ?: '—' }}</p>
                                <p><strong>Profession/Industry:</strong><br>{{ $registration->profession ?: '—' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
