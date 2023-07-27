<?php

namespace App\View\Components\Table;

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
        public bool $mono = false,
        public bool $full = false,
        public string|false $tooltip = false,
        public ?bool $boolean = null,
        public int $tooltipLimit = 60,
        public string $responsive = 'sm',
        public int $colspan = 1,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        match ($this->responsive) {
            'sm' => $this->responsive = 'sm:table-cell',
            'md' => $this->responsive = 'md:table-cell',
            'lg' => $this->responsive = 'lg:table-cell',
            'xl' => $this->responsive = 'xl:table-cell',
            '2xl' => $this->responsive = '2xl:table-cell',
            default => $this->responsive = 'table-cell',
        };

        return view('components.table.cell');
    }
}
