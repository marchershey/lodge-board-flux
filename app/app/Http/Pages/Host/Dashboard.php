<?php

namespace App\Http\Pages\Host;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
class Dashboard extends Component
{
    public function render()
    {
        return view('pages.host.dashboard');
    }
}
