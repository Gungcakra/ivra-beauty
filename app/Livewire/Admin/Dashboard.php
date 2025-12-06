<?php

namespace App\Livewire\Admin;

use App\Models\Menu;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.admin.admin')]
class Dashboard extends Component
{
   
    public function mount()
    {
        $userRole = Auth::user()->role;
        if ($userRole !== 'admin') {
            abort(403, 'Unauthorized access.');
        }
    }
    public function render()
    {
        return view('livewire.pages.admin.dashboard');
    }

}
