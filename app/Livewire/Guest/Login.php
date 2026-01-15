<?php

namespace App\Livewire\Guest;

use Illuminate\Support\Facades\Auth;
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

            if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
                session()->regenerate();

                session(['user_id' => Auth::id()]);

                if(Auth::user()->role !== 'guest'){
                    return redirect()->route('admin.dashboard');
                } else {
                    return redirect(route('landing'));
                }
            } else {
                $this->dispatch('alert-error', 'Email atau password salah.');
            }
        } catch (\Exception $e) {
            $this->dispatch('alert-error', $e->getMessage());
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('landing');
    }
    public function render()
    {
        return view('livewire.auth.login-guest');
    }
}
