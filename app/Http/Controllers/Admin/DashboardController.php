<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $activeUsers = User::where('active', true)->count();
        $roleCounts = Role::withCount('users')->orderBy('name')->get();
        $recentUsers = User::with('roles')->latest()->take(5)->get();

        return view('pages.admin.index', compact('totalUsers', 'activeUsers', 'roleCounts', 'recentUsers'));
    }
}
