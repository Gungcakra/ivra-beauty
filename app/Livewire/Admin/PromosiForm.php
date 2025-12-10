<?php

namespace App\Livewire\Admin;

use App\Models\Promosi;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

#[Layout('layouts.admin.admin')]
class PromosiForm extends Component
{
    use WithFileUploads;
    public $promosiId, $gambarPromosi;


    public function mount($promosiSelect = null)
    {
        if ($promosiSelect) {
            $promosi = Promosi::findOrFail($promosiSelect);
            $this->promosiId = $promosi->id;
            $this->gambarPromosi = $promosi->gambarPromosi;
        }
    }
    public function updatePhotoPreview()
    {
        $this->dispatch('alert-success', 'Berhasil memperbarui preview foto');
    }

    // #[Computed]
    // public function promosiImageUrl()
    // {
    //     if ($this->gambarPromosi instanceof TemporaryUploadedFile) {
    //         $this->dispatch('alert-success', 'Berhasil menyimpan foto');
    //         return $this->gambarPromosi->temporaryUrl();
    //     }
    //     return $this->gambarPromosi ? Storage::url($this->gambarPromosi) : null;
    // }
    public function store()
    {
        try {
            $this->validate([
                'gambarPromosi' => 'required|image|max:2048',
            ]);
            
            $path = $this->gambarPromosi->store('promosi', 'public');

            Promosi::create([
                'gambar_promosi' => $path,
            ]);

            return redirect()->route('admin.promosi')->with('success-alert', 'Promosi berhasil ditambahkan.');
        } catch (\Exception $e) {
            $this->dispatch('alert-error', $e->getMessage());
        }
    }

    public function update()
    {
        try {
            $this->validate([
                'gambarPromosi' => 'nullable|image|max:2048',
            ]);

            $promosi = Promosi::findOrFail($this->promosiId);

            if ($this->gambarPromosi instanceof TemporaryUploadedFile) {
                // Delete the previous image if it exists
                if ($promosi->gambarPromosi) {
                    Storage::disk('public')->delete($promosi->gambarPromosi);
                }
                $path = $this->gambarPromosi->store('promosi', 'public');
                $promosi->gambarPromosi = $path;
            }

            $promosi->save();

            return redirect()->route('admin.promosi')->with('success-alert', 'Promosi berhasil diperbarui.');
        } catch (\Exception $e) {
            $this->dispatch('alert-error', $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.pages.admin.masterdata.promosi.form');
    }
}
