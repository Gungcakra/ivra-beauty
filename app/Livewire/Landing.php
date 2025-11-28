<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest.guest')]
class Landing extends Component
{
    public function render()
    {
        return view('livewire.pages.landing.index');
    }
}
