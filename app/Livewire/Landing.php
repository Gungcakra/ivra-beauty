<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest.guest')]
class Landing extends Component
{
    public function mount()
    {
        if(Auth::check() && Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
    }
    public function render()
    {
        return view('livewire.pages.landing.index');
    }
}
