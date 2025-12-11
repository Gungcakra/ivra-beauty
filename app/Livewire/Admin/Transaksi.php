<?php

namespace App\Livewire\Admin;

use App\Models\Transaksi as ModelsTransaksi;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.admin')]
class Transaksi extends Component
{

    public $tanggal;
    public function render()
    {
        return view('livewire.pages.admin.masterdata.transaksi.index',[
            'data' => ModelsTransaksi::when($this->tanggal, function ($query) {
                $dates = explode(' to ', $this->tanggal);
                if (count($dates) === 2) {
                    $query->whereBetween('tanggal_transaksi', [$dates[0], $dates[1]]);
                } else {
                    $query->where('tanggal_transaksi', $this->tanggal);
                }
            })->get(),
        ]);
    }
}
