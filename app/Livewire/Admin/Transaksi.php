<?php

namespace App\Livewire\Admin;

use App\Models\Transaksi as ModelsTransaksi;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.admin')]
class Transaksi extends Component
{

    public $tanggal, $search;
    public function render()
    {
        return view('livewire.pages.admin.masterdata.transaksi.index', [
            'data' => ModelsTransaksi::when($this->tanggal, function ($query) {
                $dates = explode(' to ', $this->tanggal);
                $dates = array_map(fn($date) => \Carbon\Carbon::createFromFormat('d F Y', trim($date))->format('Y-m-d'), $dates);

                if (\count($dates) === 2) {
                    $query->whereBetween('tanggal_transaksi', [$dates[0], $dates[1]]);
                } else {
                    $query->where('tanggal_transaksi', $this->tanggal);
                }
            })
                ->when($this->search, function ($query) {
                    $query->whereHas('reservasi.pelanggan', function ($q) {
                        $q->where('nama', 'like', '%' . $this->search . '%')
                            ->orWhere('no_telp', 'like', '%' . $this->search . '%');
                    });
                })
                ->get(),
        ]);
    }
}
