<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('adminvilla')
        ]);
        $adminUser->assignRole('admin');
        $adminUser->syncPermissions(
            [
                'dashboard',
                'masterdata-user',
                'masterdata-menu',
                'masterdata-role',
            ]
        );
    }
}
