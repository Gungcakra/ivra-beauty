<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use App\Models\Layanan;
use App\Models\Pelanggan;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Role;

#[Layout('layouts.admin.admin')]

class LayananForm extends Component
{
    public $layananSelect, $layananId, $nama_layanan, $deskripsi, $harga, $idToDelete;

    public function mount($layananSelect = null)
    {
        $this->layananSelect = $layananSelect;
        if ($this->layananSelect) {
            $layanan = Layanan::find($this->layananSelect);
            if ($layanan) {
                $this->layananId = $layanan->id;
                $this->nama_layanan = $layanan->nama_layanan;
                $this->deskripsi = $layanan->deskripsi;
                $this->harga = $layanan->harga;
            }
        }
    }

    public function store()
    {
        try {
            $this->validate([
                'nama_layanan' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'harga' => 'required|numeric|min:0',
            ]);

            Layanan::create([
                'nama_layanan' => $this->nama_layanan,
                'deskripsi' => $this->deskripsi,
                'harga' => $this->harga,
            ]);

            return redirect()->route('admin.layanan')->with('success-alert', 'Layanan berhasil disimpan.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('alert-error', collect($e->errors())->flatten()->first());
        }
    }

    public function update()
    {
        try {
            $this->validate([
                'nama_layanan' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'harga' => 'required|numeric|min:0',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('alert-error', collect($e->errors())->flatten()->first());
            return;
        }

        $layanan = Layanan::find($this->layananId);
        $layanan->update([
            'nama_layanan' => $this->nama_layanan,
            'deskripsi' => $this->deskripsi,
            'harga' => $this->harga,
        ]);

        return redirect()->route('admin.layanan')->with('success-alert', 'Layanan berhasil diperbarui.');
    }

    public function render()
    {
        return view('livewire.pages.admin.masterdata.layanan.form');
    }
}
