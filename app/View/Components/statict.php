<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class statict extends Component
{
    public $buyers;

    /**
     * Create a new component instance.
     */
    public function __construct($buyers)
    {
        $this->buyers = $buyers;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.statict');
    }
}
