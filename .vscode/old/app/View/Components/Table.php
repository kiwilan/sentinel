<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  string[]  $headers
     */
    public function __construct(
        public array $headers = [],
        public string $title = 'Models',
        public string $subtitle = 'A list of all the models.',
        public bool $withActions = false,
        public bool $empty = false,
        public mixed $action = null,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if ($this->withActions) {
            $this->headers[] = '';
        }

        return view('components.table.index');
    }
}
