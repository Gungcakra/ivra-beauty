<?php

namespace App\Livewire\Guest;

use App\Models\Reservasi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest.guest')]
class RiwayatReservasi extends Component
{
    protected $listeners = ['batalReservasiConfirmed'];
    public $reservasi, $komplain, $idBatalReservasi;

    public function mount()
    {
        $user = Auth::user();
        $this->reservasi = Reservasi::where('id_user', $user->id)->get();
    }

    public function batalReservasi($idBatalReservasi)
    {
        $reservasi = Reservasi::find($idBatalReservasi);
        $this->idBatalReservasi = $idBatalReservasi;
        if ($reservasi) {
            $this->dispatch('confirm-batal-reservasi');
        } else {
            $this->dispatch('alert-error', 'Reservasi tidak ditemukan.');
        }
    }
    public function batalReservasiConfirmed()
    {
        $reservasi = Reservasi::find($this->idBatalReservasi);
        if ($reservasi) {
            $reservasi->delete();
            return redirect()->route('guest.riwayat-reservasi')->with('alert-success', 'Reservasi berhasil dibatalkan.');
        } else {
            $this->dispatch('alert-error', 'Reservasi tidak ditemukan.');
        }
    }
    public function submitKomplain($id)
    {
        $reservasi = Reservasi::find($id);
        if (!$this->komplain) {
            $this->dispatch('alert-error', 'Harap isi kolom komplain sebelum mengirim.');
        } else{
            $reservasi->komplain = $this->komplain;
            $reservasi->save();
            return redirect()->route('guest.riwayat-reservasi')->with('alert-success', 'Komplain berhasil dikirim.');
        }

    }
    public function render()
    {
        return view('livewire.pages.landing.riwayat-reservasi');
    }
}
