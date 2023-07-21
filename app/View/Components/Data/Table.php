<?php

namespace App\View\Components\Data;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  string[]  $head
     */
    public function __construct(
        public array $head = [],
        public string $title = 'Models',
        public string $subtitle = 'A list of all the models.',
        public bool $withActions = true,
        public bool $empty = false,
        public mixed $item = null,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if ($this->withActions) {
            $this->head[] = '';
        }

        return view('components.data.table');
    }
}
