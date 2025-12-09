<?php

namespace App\Livewire\Admin;

use App\Models\Reservasi;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.admin')]
class OperasionalReservasiTransaksi extends Component
{
    public $reservasi;

    public function mount($reservasi)
    {
        $this->reservasi = Reservasi::with(['pelanggan', 'layanan'])->findOrFail($reservasi);

    }
    public function render()
    {
        return view('livewire.pages.admin.operasional.reservasi.transaksi');
    }
}
