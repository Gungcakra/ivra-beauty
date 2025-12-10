<?php

namespace App\Livewire\Admin;

use App\Models\Reservasi;
use App\Models\Transaksi;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.admin')]
class OperasionalReservasiTransaksi extends Component
{
    public $reservasi, $nama, $email, $no_telp, $nama_layanan, $harga_layanan, $metode_bayar;

    public function mount($reservasi)
    {
        $this->reservasi = Reservasi::with(['pelanggan', 'layanan'])->findOrFail($reservasi);
        $userData = $this->reservasi->pelanggan;
        $layananData = $this->reservasi->layanan;
        $this->nama = $userData->nama;
        $this->email = $userData->email;
        $this->no_telp = $userData->no_telp;
        $this->nama_layanan = $layananData->nama_layanan;
        $this->harga_layanan = $layananData->harga_layanan;
    }

    public function setMetodeBayar($method)
    {
        $this->metode_bayar = $method;
    }

    public function transaction()
    {
        try {
            $this->validate([
                'metode_bayar' => 'required',
            ]);
            Transaksi::create([
                'id_user' => $this->reservasi->id_user,
                'id_reservasi' => $this->reservasi->id,
                'metode_bayar' => $this->metode_bayar,
                'nominal_pembayaran' => $this->reservasi->harga,
                'tanggal_transaksi' => now(),
            ]);
            return redirect()->route('admin.operasional.reservasi')->with('success-alert', 'Transaksi berhasil disimpan.');
        } catch (\Exception $e) {
            $this->dispatch('alert-error', $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.pages.admin.operasional.reservasi.transaksi');
    }
}
