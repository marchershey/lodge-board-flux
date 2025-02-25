<?php

namespace App\Http\Pages\Host;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.host', ['title' => 'Dashboard'])]
class Dashboard extends Component
{
    public function render()
    {
        return view('pages.host.dashboard');
    }
}
