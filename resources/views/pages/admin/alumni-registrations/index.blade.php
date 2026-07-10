@extends('layouts.admin.app')

@section('content')

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Alumni Database</a>
            </li>
            <li class="page-back"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <!--== Registrations List ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Alumni Database</h4>
                        <p>Former pupils who have registered through the public Alumni Database page.</p>
                    </div>

                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name (in school)</th>
                                        <th>Current Name</th>
                                        <th>Class Set</th>
                                        <th>Country</th>
                                        <th>Registered</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($registrations as $registration)
                                        <tr>
                                            <td><span class="list-enq-name">{{ $registration->school_name }}</span></td>
                                            <td>{{ $registration->current_name ?: '—' }}</td>
                                            <td>{{ $registration->class_set }}</td>
                                            <td>{{ $registration->country }}</td>
                                            <td>{{ $registration->created_at->format('d M Y') }}</td>
                                            <td>
                                                <a href="{{ route('admin.alumni-registrations.show', $registration) }}" class="ad-st-view">View</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">No alumni registrations yet.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $registrations->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
