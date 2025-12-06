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

class UserForm extends Component
{
    public $userSelect, $userId, $nama, $email, $password, $no_telp,  $idToDelete, $selectedRole;

    public function mount($userSelect = null)
    {
        $this->userSelect = $userSelect;
        $checkUser = ModelsUser::find($this->userSelect);
        $checkUserRole = $checkUser->role ?? null;
        if ($checkUserRole === 'admin') {
            $this->userId = $checkUser->id;
            $this->nama = $checkUser->admin?->nama;
            $this->email = $checkUser->email;
            $this->no_telp = $checkUser->admin?->no_telp;
            $this->password = '';
            $this->selectedRole = $checkUser->role;
        }

        if ($checkUserRole === 'guest') {
            $this->userId = $checkUser->id;
            $this->nama = $checkUser->pelanggan?->nama;
            $this->email = $checkUser->email;
            $this->no_telp = $checkUser->pelanggan?->no_telp;
            $this->password = '';
            $this->selectedRole = $checkUser->role;
        }
    }
    public function store()
    {
        try {
            $this->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|email',
                'password' => 'required',
                'selectedRole' => 'required',
                'no_telp' => 'required|string',
            ]);
            $user =  ModelsUser::create([
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'role' => $this->selectedRole
            ]);
            if ($user->role == 'guest') {
                Pelanggan::create([
                    'id_user' => $user->id,
                    'nama' => $this->nama,
                    'no_telp' => $this->no_telp,
                ]);
            } elseif ($user->role == 'admin') {
                Admin::create([
                    'id_user' => $user->id,
                    'nama' => $this->nama,
                    'no_telp' => $this->no_telp,
                ]);
            }

            return redirect()->route('admin.user')->with('success', 'User berhasil disimpan.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('alert-error', collect($e->errors())->flatten()->first());
            return;
        }
    }
    public function update()
    {

        try {
            $this->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|email',
                'selectedRole' => 'required',
                'password' => 'nullable|min:6',
                'no_telp' => 'required|string',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('alert-error', collect($e->errors())->flatten()->first());
            return;
        }

        $user = ModelsUser::find($this->userId);
        $dataToUpdate = [
            'email' => $this->email,
            'role' => $this->selectedRole
        ];

        if (!empty($this->password)) {
            $dataToUpdate['password'] = bcrypt($this->password);
        }

        $user->update($dataToUpdate);

        if ($user->role == 'guest') {
            Pelanggan::updateOrCreate(
                ['id_user' => $user->id],
                ['nama' => $this->nama, 'no_telp' => $this->no_telp]
            );
        } elseif ($user->role == 'admin') {
            Admin::updateOrCreate(
                ['id_user' => $user->id],
                ['nama' => $this->nama, 'no_telp' => $this->no_telp]
            );
        }
        return redirect()->route('admin.user')->with('success-alert', 'User berhasil diperbarui.');
    }

    public function render()
    {
        return view('livewire.pages.admin.masterdata.user.form');
    }
}
