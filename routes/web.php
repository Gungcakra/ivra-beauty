<?php

use App\Livewire\Admin\UserForm;
use App\Livewire\EmployeeManagement;
use App\Livewire\Auth\Login;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Layanan;
use App\Livewire\Admin\LayananForm;
use App\Livewire\Guest\Login as LoginGuest;
use App\Livewire\Guest\Register as RegisterGuest;
use App\Livewire\Landing;
use App\Livewire\Admin\User;
use App\Livewire\Guest\Reservasi;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class)->name('landing');

// AUTHENTICATION ROUTES FOR GUEST
Route::middleware(['guest'])->group(function () {
    Route::get('/guest/login',LoginGuest::class)->name('guest.login');
    Route::get('/guest/register', RegisterGuest::class)->name('guest.register');

  


});
Route::middleware(['auth', 'role:guest'])->group(function () {
    // RESERVATION ROUTE
    Route::get('/guest/layanan/{layanan}/reservasi', Reservasi::class)->name('guest.reservasi');
    Route::get('/guest/logout', [LoginGuest::class, 'logout'])->name('guest.logout');
});


// AUTHENTICATION ROUTES FOR ADMIN
Route::get('/admin/login', Login::class)->name('admin.login');
Route::get('/admin/logout', [Login::class, 'logout'])->name('admin.logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');

    //MASTERDATA ROUTES

    // USER
    Route::get('/admin/user', User::class)->name('admin.user');
    Route::get('/admin/user/create',UserForm::class)->name('admin.user.create');
    Route::get('/admin/user/{userSelect}/edit/',UserForm::class)->name('admin.user.edit');

    // SERVICE
    Route::get('/admin/layanan', Layanan::class)->name('admin.layanan');
    Route::get('/admin/layanan/create', LayananForm::class)->name('admin.layanan.create');
    Route::get('/admin/layanan/{layananSelect}/edit', LayananForm::class)->name('admin.layanan.edit');
});
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});