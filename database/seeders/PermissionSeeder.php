<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $permissions = [

            'view students',
            'create students',
            'edit students',
            'delete students',

            'view teachers',
            'create teachers',
            'edit teachers',
            'delete teachers',

            'view alumni',
            'create alumni',
            'edit alumni',
            'delete alumni',

            'view certificates',
            'approve certificates',

            'view payments',
            'manage payments',

            'view donations',
            'manage donations',

            'manage news',
            'manage gallery',
            'manage sliders',
            'manage pages',

            'view users',
            'create users',
            'edit users',
            'delete users',
            'assign roles',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
    }
}
