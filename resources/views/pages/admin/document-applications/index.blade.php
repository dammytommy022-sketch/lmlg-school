@extends('layouts.admin.app')

@section('content')

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Document Applications</a>
            </li>
            <li class="page-back"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <!--== Applications List ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Document Applications</h4>
                        <p>Certificate and testimonial requests submitted from the public Document Application page.</p>
                    </div>

                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Applicant</th>
                                        <th>Document</th>
                                        <th>Graduation Year</th>
                                        <th>Delivery</th>
                                        <th>Status</th>
                                        <th>Submitted</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($applications as $application)
                                        <tr>
                                            <td><span class="list-enq-name">{{ $application->full_name }}</span></td>
                                            <td>{{ $application->document_type }}</td>
                                            <td>{{ $application->graduation_year }}</td>
                                            <td>{{ $application->delivery_option }}</td>
                                            <td>
                                                <span class="label label-default">{{ ucfirst($application->status) }}</span>
                                            </td>
                                            <td>{{ $application->created_at->format('d M Y') }}</td>
                                            <td>
                                                <a href="{{ route('admin.document-applications.show', $application) }}" class="ad-st-view">View</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7">No applications submitted yet.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $applications->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
