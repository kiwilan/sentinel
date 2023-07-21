<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $year = '2023',
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $beginYear = '2023';
        $currentYear = date('Y');
        $this->year = $beginYear === $currentYear ? $currentYear : $beginYear.' - '.$currentYear;

        return view('components.layout.footer');
    }
}
