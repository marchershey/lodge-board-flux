<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Logo extends Component
{
    public $iconSize;
    /**
     * Create a new component instance.
     */
    public function __construct(string $iconSize = "size-6")
    {
        $this->iconSize = $iconSize;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.logo');
    }
}
