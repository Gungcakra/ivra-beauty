<?php

namespace App\Livewire\Guest;

use App\Models\Reservasi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest.guest')]
class RiwayatReservasi extends Component
{
    public $reservasi;

    public function mount()
    {
        $user = Auth::user();
        $this->reservasi = Reservasi::where('id_user', $user->id)->get();
    }
    public function render()
    {
        return view('livewire.pages.landing.riwayat-reservasi');
    }
}
