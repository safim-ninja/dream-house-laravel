<?php

namespace App\View\Components\frontend\layouts\partial;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class deal extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.layouts.partial.deal');
    }
}
