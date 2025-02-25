<?php

namespace App\Http\Pages\Guest;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest', ['title' => 'Dashboard'])]
class Dashboard extends Component
{
    public function render()
    {
        return view('pages.guest.dashboard');
    }
}
