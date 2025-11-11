<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);

        // Define permissions
        $permissions = [
            'dashboard',
            'masterdata-user',
            'masterdata-menu',
            'masterdata-role',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }


        $admin->syncPermissions([
            'dashboard',
            'masterdata-user',
            'masterdata-role',
            'masterdata-menu',
        ]);

        
    }
}
