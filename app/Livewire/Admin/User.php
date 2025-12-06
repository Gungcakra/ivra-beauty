<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use App\Models\Pelanggan;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Role;

#[Layout('layouts.admin.admin')]

class User extends Component
{
    public $userId, $nama, $email, $password, $no_telp,  $idToDelete, $selectedRole;
    protected $listeners = ['deleteUser', 'loadData'];
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
        $this->dispatch('confirm-delete', 'Are you sure you want to delete this user?');
    }
    public function deleteUser()
    {
        try {
            $user = ModelsUser::find($this->idToDelete);
            if ($user) {
                $user->delete();
                $this->dispatch('delete-success', params: 'User deleted successfully.');
            } else {
                $this->dispatch('error', 'User not found.');
            }
        } catch (\Exception $e) {
            $this->dispatch('error', 'Failed to delete user: ' . $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.pages.admin.masterdata.user.index', data: [
            'data' => ModelsUser::query()->with(['pelanggan', 'admin'])
                ->when($this->search, function ($query) {
                    $query->whereHas('pelanggan', function ($q) {
                        $q->where('nama', 'like', '%' . $this->search . '%')
                            ->orWhere('email', 'like', '%' . $this->search . '%');
                    })->orWhereHas('admin', function ($q) {
                        $q->where('nama', 'like', '%' . $this->search . '%')
                            ->orWhere('email', 'like', '%' . $this->search . '%');
                    });
                })
                ->paginate(10),

        ]);
    }
}
