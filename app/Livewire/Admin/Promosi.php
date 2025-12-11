<?php

namespace App\Livewire\Admin;

use App\Models\Promosi as ModelsPromosi;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.admin')]
class Promosi extends Component
{
    public $gambarPromosi, $idToDelete;

    protected $listeners = ['deletePromosiConfirmed'];
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

    public function delete($id)
    {
        $this->dispatch('confirm-delete', 'Yakin ingin menghapus promosi ini?');
        $this->idToDelete = $id;
    }

    public function deletePromosiConfirmed()
    {
        try {
            $promosi = ModelsPromosi::find($this->idToDelete);
            if ($promosi) {
                // Delete file from storage
                if ($promosi->gambar_promosi && Storage::exists($promosi->gambar_promosi)) {
                    Storage::delete($promosi->gambar_promosi);
                }
                $promosi->delete();
                $this->dispatch('alert-success', 'Promosi berhasil dihapus.');
            } else {
                $this->dispatch('alert-error', 'Promosi tidak ditemukan.');
            }
        } catch (\Exception $e) {
            $this->dispatch('alert-error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.pages.admin.masterdata.promosi.index',[
            'data' => ModelsPromosi::all()
        ]);
    }
}
