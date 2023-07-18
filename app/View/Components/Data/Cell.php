<?php

namespace App\View\Components\Data;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cell extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $primary = false,
        public bool $code = false,
        public bool $tooltip = false,
        public int $tooltipLimit = 60,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data.cell');
    }
}
