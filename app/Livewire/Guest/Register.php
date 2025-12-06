<?php

namespace App\Livewire\Guest;

use App\Models\Pelanggan;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest.app')]
class Register extends Component
{

    public $nama, $email, $no_telp, $password;

    public function register()
    {
        try {
            $this->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'no_telp' => 'required|string',
                'password' => 'required|string',
            ]);

            $user = User::create([
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'role' => 'guest',
            ]);

            Pelanggan::create([
                'id_user' => $user->id,
                'nama' => $this->nama,
                'no_telp' => $this->no_telp,
            ]);
            return redirect()->route('guest.login')->with('alert-success', 'Registrasi berhasil! Silakan login.');
        } catch (\Exception $e) {
            $this->dispatch('alert-error', $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.auth.register-guest');
    }
}
