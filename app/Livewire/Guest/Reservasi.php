<?php

namespace App\Livewire\Guest;

use App\Models\Layanan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest.guest')]
class Reservasi extends Component
{
    public $layanan, $dataLayanan;
    public function mount($layanan)
    {
        
        $this->layanan = $layanan;
        $this->dataLayanan = Layanan::find($this->layanan);
    }
    public function render()
    {
        return view('livewire.pages.landing.reservasi');
    }
}
