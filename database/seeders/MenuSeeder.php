<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu = [
            [
                'name' => 'Dashboard',
                'icon' => 'bi bi-house',
                'order' => 1,
                'route' => 'dashboard',
                'permission_id' => Permission::where('name','dashboard')->first()->id,
            ],
            [
                'name' => 'Master Data',
                'icon' => 'bi bi-database',
                'order' => 2,
            ],
            [
                'name' => 'Operational',
                'icon' => 'bi bi-gear',
                'order' => 3,
            ],
        ];

        foreach ($menu as $item) {
            \App\Models\Menu::create($item);
        }

        $subMenu = [
            [
                'name'=> 'User',
                'route' => 'user',
                'parrent_id' => 2,
                'permission_id' => Permission::where('name', 'masterdata-user')->first()->id,
            ],
            [
                'name'=> 'Menu',
                'route' => 'menu',
                'parrent_id' => 2,
                'permission_id' => Permission::where('name', 'masterdata-menu')->first()->id,
            ],
            [
                'name'=> 'Role',
                'route' => 'role',
                'parrent_id' => 2,
                'permission_id' => Permission::where('name', 'masterdata-role')->first()->id,
            ],
            ];
        foreach ($subMenu as $item) {
            \App\Models\Menu::create($item);
        }

    }
}
