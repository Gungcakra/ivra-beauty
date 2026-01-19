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
            'data' => Reservasi::with(['pelanggan', 'layanans'])
                ->when($this->search, function ($query) {
                    $query->whereHas('pelanggan', function ($q) {
                        $q->where('nama', 'like', '%' . $this->search . '%')
                            ->orWhere('no_telp', 'like', '%' . $this->search . '%');
                    });
                })
                ->when($this->tanggal, function ($query) {
                    $date = \Carbon\Carbon::createFromFormat('d F y', $this->tanggal)->format('Y-m-d');
                    $query->whereDate('tanggal', $date);
                })
                    
                ->when($this->status, function ($query) {
                    $query->where('status', $this->status);
                })
                ->whereDoesntHave('transaksi')
                ->orderBy('created_at', 'desc')
                ->get(),
        ]);
    }
}
