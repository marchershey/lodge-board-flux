<?php

namespace App\Http\Pages\Host;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.host', ['title' => 'Calendar'])]
class Calendar extends Component
{
    public function render()
    {
        return view('pages.host.calendar');
    }
}
