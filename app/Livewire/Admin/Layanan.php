<?php

namespace App\Livewire\Admin;

use App\Models\Layanan as ModelsLayanan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.admin')]

class Layanan extends Component
{
    public $layananId, $nama, $deskripsi, $harga, $idToDelete;
    protected $listeners = ['deleteLayanan', 'loadData'];
    public $search = '';

    public function mount()
    {
        $userRole = Auth::user()->role;
        if ($userRole !== 'admin') {
            abort(403, 'Unauthorized access.');
        }
    }
    public function delete($id)
    {
        $this->idToDelete = $id;
        $this->dispatch('confirm-delete', 'Yakin ingin menghapus layanan ini?');
    }
    public function deleteLayanan()
    {
        try {
            $layanan = ModelsLayanan::find($this->idToDelete);
            if ($layanan) {
                $layanan->delete();
                $this->dispatch('delete-success', params: 'Layanan berhasil dihapus.');
            } else {
                $this->dispatch('error-alert', 'Layanan tak ditemukan.');
            }
        } catch (\Exception $e) {
            $this->dispatch('error-alert',  $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.pages.admin.masterdata.layanan.index', data: [
            'data' => ModelsLayanan::query()
                ->when($this->search, function ($query) {
                    $query->where('nama', 'like', '%' . $this->search . '%')
                        ->orWhere('deskripsi', 'like', '%' . $this->search . '%');
                })
                ->paginate(10),

        ]);
    }
}
