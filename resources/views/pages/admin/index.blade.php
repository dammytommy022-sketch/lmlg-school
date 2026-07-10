@extends('layouts.admin.app')

@section('content')

    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Dashboard</a>
            </li>
        </ul>
    </div>

    <!--== DASHBOARD INFO ==-->
    <div class="sb2-2-1">
        <h2>Admin Dashboard</h2>
        <p>Welcome back, {{ auth()->user()->name }}.</p>
        <div class="db-2">
            <ul>
                <li>
                    <div class="dash-book dash-b-1">
                        <div class="dash-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                        <h5>Total Users</h5>
                        <h4>{{ $totalUsers }}</h4>
                        <a href="{{ route('admin.users.index') }}">View more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <div class="dash-icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                        <h5>Active Users</h5>
                        <h4>{{ $activeUsers }}</h4>
                        <a href="{{ route('admin.users.index') }}">View more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                @foreach ($roleCounts as $role)
                    @php
                        $roleIcon = match (true) {
                            str_contains($role->name, 'Admin') => 'fa-shield',
                            $role->name === 'Staff' => 'fa-briefcase',
                            $role->name === 'Alumni' => 'fa-graduation-cap',
                            default => 'fa-user',
                        };
                    @endphp
                    <li>
                        <div class="dash-book dash-b-{{ (($loop->index + 2) % 4) + 1 }}">
                            <div class="dash-icon"><i class="fa {{ $roleIcon }}" aria-hidden="true"></i></div>
                            <h5>{{ $role->name }}</h5>
                            <h4>{{ $role->users_count }}</h4>
                            <a href="{{ route('admin.users.index') }}">View more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!--== Recent Users ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Recently Added Users</h4>
                        <p>The most recently created accounts and their assigned roles.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Status</th>
                                        <th>Joined</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($recentUsers as $user)
                                        <tr>
                                            <td><span class="list-enq-name">{{ $user->name }}</span></td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @forelse ($user->roles as $role)
                                                    <span class="label label-default">{{ $role->name }}</span>
                                                @empty
                                                    <span class="txt-dark">&mdash;</span>
                                                @endforelse
                                            </td>
                                            <td>
                                                @if ($user->active)
                                                    <span class="label label-success">Active</span>
                                                @else
                                                    <span class="label label-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>{{ $user->created_at->format('d M Y') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">No users found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ route('admin.users.index') }}" class="ad-st-view">View All Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
