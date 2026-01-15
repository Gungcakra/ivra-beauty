<?php

namespace Database\Seeders;

use App\Models\Layanan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Admin',
            'no_telp' => '081234567890',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('adminuser'),
            'role' => 'admin',
        ]);

        User::create([
            'nama' => 'Pelanggan User',
            'no_telp' => '089876543210',
            'email' => 'pelanggan@gmail.com',
            'password' => bcrypt('pelangganuser'),
            'role' => 'guest',
        ]);

        Layanan::insert([
            ['nama_layanan' => 'Facial', 'deskripsi' => 'Perawatan wajah untuk membersihkan dan meremajakan kulit.', 'harga' => 150000],
            ['nama_layanan' => 'Manicure', 'deskripsi' => 'Perawatan kuku tangan untuk mempercantik dan merawat kuku.', 'harga' => 100000],
            ['nama_layanan' => 'Pedicure', 'deskripsi' => 'Perawatan kuku kaki untuk mempercantik dan merawat kuku.', 'harga' => 120000],
            ['nama_layanan' => 'Hair Spa', 'deskripsi' => 'Perawatan rambut untuk menutrisi dan melembapkan rambut.', 'harga' => 200000],
            ['nama_layanan' => 'Body Massage', 'deskripsi' => 'Pijat tubuh untuk relaksasi dan mengurangi stres.', 'harga' => 250000],
        ]);
   }

    
}
