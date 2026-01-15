<?php

namespace App\Livewire\Guest;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest.guest')]
class Profile extends Component
{
    public $nama, $email, $no_telp, $password;

    public function mount()
    {
        $user = Auth::user();
        $this->nama = $user->nama;
        $this->email = $user->email;
        $this->no_telp = $user->no_telp;
    }

    public function updateProfile()
    {
       try {
            $this->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . Auth::id(),
                'no_telp' => 'required|string',
                'password' => 'nullable|string',
            ]);

            $idUser = Auth::user();
            $user = User::find($idUser->id);
            $user->email = $this->email;
            if (!empty($this->password)) {
                $user->password = Hash::make($this->password);
            }

            $user->nama = $this->nama;
            $user->no_telp = $this->no_telp;
            $user->save();

            return redirect()->route('landing')->with('alert-success', 'Profile berhasil diperbarui.');
        } catch (\Exception $e) {
            $this->dispatch('alert-error', $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.pages.landing.profile');
    }
}
