<?php

namespace App\Livewire\Admin;

use App\Models\Reservasi;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.admin')]
class OperasionalReservasi extends Component
{
     public $search, $tanggal, $status;
    public function render()
    {
        return view('livewire.pages.admin.operasional.reservasi.index',[
            'data' => Reservasi::with(['pelanggan', 'layanan'])
                ->when($this->search, function ($query) {
                    $query->whereHas('pelanggan', function ($q) {
                        $q->where('nama', 'like', '%' . $this->search . '%')
                            ->orWhere('no_telp', 'like', '%' . $this->search . '%');
                    });
                })
                ->when($this->tanggal, function ($query) {
                    $query->where('tanggal', $this->tanggal);
                })
                ->when($this->status, function ($query) {
                    $query->where('status', $this->status);
                })
                ->where('tanggal', now()->format('Y-m-d'))
                ->whereDoesntHave('transaksi')
                ->orderBy('created_at', 'desc')
                ->get(),
        ]);
    }
}
