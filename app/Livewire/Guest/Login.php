<?php

namespace App\Livewire\Guest;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest.app')]

class Login extends Component
{
    public $email, $password, $remember = false;

    public function login()
    {
        try {
            $this->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (!\App\Models\User::where('email', $this->email)->exists()) {
                $this->dispatch('alert-error', 'Email tidak terdaftar.');
                return;
            }

            if (\Illuminate\Support\Facades\Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
                session()->regenerate();

                session(['user_id' => \Illuminate\Support\Facades\Auth::id()]);

                return redirect(route('landing'));
            } else {
                $this->dispatch('alert-error', 'Email atau password salah.');
            }
        } catch (\Exception $e) {
            $this->dispatch('alert-error', $e->getMessage());
        }
    }

    public function logout()
    {
        \Illuminate\Support\Facades\Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('landing');
    }
    public function render()
    {
        return view('livewire.auth.login-guest');
    }
}
