<?php

namespace App\Livewire;

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

#[Layout('layouts.admin')]
class MenuManagement extends Component
{
    public $menuId, $name, $route, $order, $icon, $parrent_id, $permission_id, $menuIdToDelete;
    public $isModalOpen = false;

    protected $listeners = ['deleteMenuConfirmed'];

    public function mount()
    {
        $userPermissions = Auth::user()->roles->flatMap(function ($role) {
            return $role->permissions->pluck('name');
        });

        if (!$userPermissions->contains('masterdata-menu')) {
            abort(403, 'Unauthorized action.');
        }
    }

    public function openModal($parrent_id = null)
    {
        $this->parrent_id = $parrent_id;
        $this->isModalOpen = true;
        $this->reset(['menuId', 'name', 'route', 'order', 'icon', 'parrent_id', 'permission_id']);
        $this->dispatch('show-modal');
    }

    public function closeModal()
    {
        $this->reset(['menuId', 'name', 'route', 'order', 'icon', 'parrent_id', 'permission_id']);
        $this->isModalOpen = false;
        $this->dispatch('hide-modal');
    }

    public function render()
    {
        return view('livewire.pages.admin.masterdata.menu.index', [
            'data' => Menu::with(['children', 'permission'])->whereNull('parrent_id')->get(),
            'permissions' => Permission::all(),
            'menus' => Menu::get(),
        ]);
    }

    public function create($parrent_id = null)
    {
        $this->openModal($parrent_id);
        $this->parrent_id = $parrent_id;
        $this->isModalOpen = true;
    }

    public function store()
    {
        try {
            $this->validate([
                'name' => 'required|string|max:255',
                'route' => 'nullable|string|max:255',
                'order' => 'nullable|integer',
                'icon' => 'nullable|string|max:255',
                'permission_id' => 'nullable|exists:permissions,id',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('error', collect($e->errors())->flatten()->first());
            return;
        }

        Menu::create([
            'name' => $this->name,
            'route' => $this->route,
            'order' => $this->order,
            'icon' => $this->icon,
            'parrent_id' => $this->parrent_id,
            'permission_id' => $this->permission_id,
        ]);

        $this->dispatch('success', 'Menu added successfully!');
        $this->closeModal();
    }

    public function edit($id)
    {
        $this->menuId = $id;
        $menu = Menu::findOrFail($id);
        $this->fill($menu->only(['name', 'route', 'order', 'icon', 'parrent_id', 'permission_id']));
        $this->dispatch('show-modal');
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'route' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'icon' => 'nullable|string|max:255',
            'permission_id' => 'nullable|exists:permissions,id',
        ]);

        $menu = Menu::findOrFail($this->menuId);
        $menu->update([
            'name' => $this->name,
            'route' => $this->route,
            'order' => $this->order,
            'icon' => $this->icon,
            'parrent_id' => $this->parrent_id,
            'permission_id' => $this->permission_id,
        ]);

        $this->dispatch('success', 'Menu updated successfully!');
        $this->closeModal();
    }

    public function delete($id)
    {
        $this->menuIdToDelete = $id;
        $this->dispatch('delete-menu', "Are you sure you want to delete this menu?");
    }

    public function deleteMenuConfirmed()
    {
        if ($this->menuIdToDelete) {
            $menu = Menu::findOrFail($this->menuIdToDelete);
            // Delete children first
            Menu::where('parrent_id', $menu->id)->delete();
            $menu->delete();
            $this->dispatch('delete-success', 'Menu deleted successfully!');
        }
    }
}
