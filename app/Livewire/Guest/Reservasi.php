<?php

namespace App\Livewire\Guest;

use App\Models\Layanan;
use App\Models\Reservasi as ModelsReservasi;
use App\Models\ReservasiLayanan; // Pastikan model ini ada
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest.guest')]
class Reservasi extends Component
{
    public $currentStep = 1;
    public $selectedLayananIds = []; // Simpan ID layanan yang dipilih
    public $tanggal, $waktu, $search;

    // Toggle pilihan layanan (Multiple)
    public function toggleService($id)
    {
        if (in_array($id, $this->selectedLayananIds)) {
            $this->selectedLayananIds = array_diff($this->selectedLayananIds, [$id]);
        } else {
            $this->selectedLayananIds[] = $id;
        }
    }

    public function nextStep()
    {
        if ($this->currentStep == 1) {
            if (empty($this->selectedLayananIds)) {
                $this->dispatch('alert-error', 'Silahkan pilih minimal satu layanan.');
                return;
            }
        }
        $this->currentStep++;
    }

    public function prevStep()
    {
        $this->currentStep--;
    }

    public function reservasi()
    {

        try {
            $this->validate([
                'tanggal' => 'required|date|after_or_equal:today',
                'waktu' => 'required',
            ]);
            $checkSameReservation = ModelsReservasi::where('tanggal', $this->tanggal)
                ->where('waktu', $this->waktu)
                ->exists();

            if ($checkSameReservation) {
                throw ValidationException::withMessages(['tanggal' => 'Sudah ada reservasi pada tanggal dan waktu tersebut. Silahkan pilih waktu lain.']);
            }
            $user = Auth::user();
            $layanans = Layanan::whereIn('id', $this->selectedLayananIds)->get();
            $totalHarga = $layanans->sum('harga');

            $reservasi = ModelsReservasi::create([
                'id_user' => $user->id,
                'tanggal' => $this->tanggal,
                'waktu' => $this->waktu,
                'harga' => $totalHarga,
                'status' => 'pending'
            ]);

            foreach ($this->selectedLayananIds as $idLayanan) {
                ReservasiLayanan::create([
                    'id_reservasi' => $reservasi->id,
                    'id_layanan' => $idLayanan,
                ]);
            }

            return redirect()->route('landing')->with('alert-success', 'Reservasi berhasil dibuat');
        } catch (ValidationException $e) {
            $this->dispatch('alert-error', collect($e->errors())->flatten()->first());
        }
    }

    public function render()
    {
        return view('livewire.pages.landing.reservasi', [
            'dataLayanan' => Layanan::when($this->search, function ($query) {
                $query->where('nama_layanan', 'like', '%' . $this->search . '%');
            })->get(),
            'selectedLayanan' => Layanan::whereIn('id', $this->selectedLayananIds)->get(),
        ]);
    }
}
