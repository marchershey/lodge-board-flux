<?php

namespace App\Http\Pages\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sign up')]
class Register extends Component
{
    public function render()
    {
        return view('pages.auth.register');
    }
}
