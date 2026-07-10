<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::findByName('Super Admin');

        $superAdmin->givePermissionTo(
            \Spatie\Permission\Models\Permission::all()
        );

        $admin = Role::findByName('Admin');
        $admin->givePermissionTo([
            'view students',
            'create students',
            'edit students',
            'view teachers',
            'create teachers',
            'edit teachers',
            'view alumni',
            'approve certificates',
            'view payments',
            'manage payments',
        ]);

        $staff = Role::findByName('Staff');
        $staff->givePermissionTo([
            'view students',
            'view teachers',
            'view alumni',
        ]);

        $alumni = Role::findByName('Alumni');
        $alumni->givePermissionTo([
            'view certificates',
        ]);
    }
}
