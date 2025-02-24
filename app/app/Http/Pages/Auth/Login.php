<?php

namespace App\Http\Pages\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.minimal', ['title' => 'Login', 'header' => false])]
class Login extends Component
{
    public function render()
    {
        return view('pages.auth.login');
    }
}
