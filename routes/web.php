<?php

use App\Livewire\EmployeeManagement;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\Landing;
use App\Livewire\User;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class)->name('landing');

Route::get('/login', Login::class)->name('login');
Route::get('/logout', [Login::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/user', User::class)->name('user');
    Route::get('/employee', EmployeeManagement::class)->name('employee');
});
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});