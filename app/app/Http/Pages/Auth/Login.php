<?php

namespace App\Http\Pages\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sign in')]
class Login extends Component
{
    public function render()
    {
        return view('pages.auth.login');
    }
}
