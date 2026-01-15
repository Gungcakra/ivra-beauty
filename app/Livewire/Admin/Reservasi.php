<?php

namespace App\Livewire\Admin;

use App\Models\Reservasi as ModelsReservasi;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.admin')]
class Reservasi extends Component
{

    public $search, $tanggal, $status;
    public function render()
    {
        return view('livewire.pages.admin.masterdata.reservasi.index',[
            'data' => ModelsReservasi::with(['pelanggan', 'layanans'])
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
                ->orderBy('created_at', 'desc')
                ->get(),
        ]);
    }
}
