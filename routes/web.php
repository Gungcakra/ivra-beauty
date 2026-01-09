<?php

use App\Livewire\Admin\OperasionalReservasi;
use App\Livewire\Admin\PromosiForm;
use App\Livewire\Admin\UserForm;
use App\Livewire\Auth\Login;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Layanan;
use App\Livewire\Admin\LayananForm;
use App\Livewire\Admin\OperasionalReservasiTransaksi;
use App\Livewire\Admin\Promosi;
use \App\Livewire\Admin\Transaksi as AdminTransaksi;
use App\Livewire\Admin\Reservasi as AdminReservasi;
use App\Livewire\Guest\Login as LoginGuest;
use App\Livewire\Guest\Register as RegisterGuest;
use App\Livewire\Landing;
use App\Livewire\Guest\Profile;
use App\Livewire\Guest\Reservasi;

use App\Livewire\Guest\RiwayatReservasi;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class)->name('landing');

// AUTHENTICATION ROUTES FOR GUEST
Route::middleware(['guest'])->group(function () {
    Route::get('/guest/login', LoginGuest::class)->name('guest.login');
    Route::get('/guest/register', RegisterGuest::class)->name('guest.register');
});
Route::middleware(['auth', 'role:guest'])->group(function () {
    // RESERVATION ROUTE
    Route::get('/guest/layanan/reservasi', Reservasi::class)->name('guest.reservasi');
    Route::get('/guest/riwayat-reservasi', RiwayatReservasi::class)->name('guest.riwayat-reservasi');
    Route::get('/guest/profile', Profile::class)->name('guest.profile');
    Route::get('/guest/logout', [LoginGuest::class, 'logout'])->name('guest.logout');
});

Route::get('/print-invoice/{id}', function ($id) {
    $transaksi = Transaksi::find($id);
    if (!$transaksi) {
        abort(404, 'Transaksi tidak ditemukan');
    }
    return view('livewire.pages.admin.operasional.reservasi.invoice', ['transaksi' => $transaksi]);
})->name('invoice');

// AUTHENTICATION ROUTES FOR ADMIN
Route::get('/admin/login', Login::class)->name('admin.login');
Route::get('/admin/logout', [Login::class, 'logout'])->name('admin.logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');

    //MASTERDATA ROUTES

    // USER
    Route::get('/admin/user/create', UserForm::class)->name('admin.user.create');
    Route::get('/admin/user/{userSelect}/edit/', UserForm::class)->name('admin.user.edit');

    // LAYANAN
    Route::get('/admin/layanan', Layanan::class)->name('admin.layanan');
    Route::get('/admin/layanan/create', LayananForm::class)->name('admin.layanan.create');
    Route::get('/admin/layanan/{layananSelect}/edit', LayananForm::class)->name('admin.layanan.edit');

    // PROMOSI
    Route::get('/admin/promosi', Promosi::class)->name('admin.promosi');
    Route::get('/admin/promosi/create', PromosiForm::class)->name('admin.promosi.create');
    Route::get('/admin/promosi/{promosiSelect}/edit', PromosiForm::class)->name('admin.promosi.edit');

    // RESERVASI
    Route::get('/admin/reservasi', AdminReservasi::class)->name('admin.reservasi');

    // TRANSAKSI
    Route::get('/admin/transaksi', AdminTransaksi::class)->name('admin.transaksi');

    // OPERASIONAL ROUTES
    Route::get('/admin/operasional/reservasi', OperasionalReservasi::class)->name('admin.operasional.reservasi');
    Route::get('/admin/operasional/reservasi/{reservasi}/transaksi', OperasionalReservasiTransaksi::class)->name('admin.operasional.reservasi.transaksi');
});
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
