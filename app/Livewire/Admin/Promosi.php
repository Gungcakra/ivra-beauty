<?php

namespace App\Livewire\Admin;

use App\Models\Promosi as ModelsPromosi;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.admin')]
class Promosi extends Component
{
    public $gambarPromosi;

    public function showPhoto($id)
    {
        $promosi = ModelsPromosi::find($id);
        if ($promosi) {
            $this->gambarPromosi = $promosi->gambar_promosi;
            $this->dispatch('show-modal');
        } else {
            $this->dispatch('alert-error', 'Promosi tidak ditemukan.');
        }
    }

    public function closeModal()
    {
        $this->gambarPromosi = null;
        $this->dispatch('close-modal');
    }
    public function render()
    {
        return view('livewire.pages.admin.masterdata.promosi.index',[
            'data' => ModelsPromosi::all()
        ]);
    }
}
