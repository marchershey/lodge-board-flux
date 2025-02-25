<?php

namespace App\Http\Pages\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.minimal', ['title' => 'Join'])]
class Register extends Component
{
    public function render()
    {
        return view('pages.auth.register');
    }
}
