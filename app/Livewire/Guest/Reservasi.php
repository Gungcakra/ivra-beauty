<?php

namespace App\Livewire\Guest;

use App\Models\Layanan;
use App\Models\Reservasi as ModelsReservasi;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest.guest')]
class Reservasi extends Component
{
    public $layanan, $dataLayanan;
    public $tanggal, $waktu;
    public function mount($layanan)
    {
        
        $this->layanan = $layanan;
        $this->dataLayanan = Layanan::find($this->layanan);
    }

    public function reservasi()
    {
        try{
            $this->validate([
                'tanggal' => 'required|date|after_or_equal:today',
                'waktu' => 'required',
            ]);
            $user = Auth::user();

            ModelsReservasi::create([
                'id_user' => $user->pelanggan->id,
                'id_layanan' => $this->dataLayanan->id,
                'tanggal' => $this->tanggal,
                'waktu' => $this->waktu,
            'harga' => $this->dataLayanan->harga,
            ]);

            return redirect()->route('landing')->with('alert-success', 'Reservasi berhasil dibuat');
        } catch (\Exception $e) {
            $this->dispatch('alert-error',$e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.pages.landing.reservasi');
    }
}
