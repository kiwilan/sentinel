<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tooltip extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $tooltip = null,
        public string $text = '',
        public int $limit = 60,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if (is_null($this->tooltip)) {
            $this->tooltip = $this->text;
        }

        if (strlen($this->text) > $this->limit) {
            $this->text = substr($this->text, 0, $this->limit).'...';
        }

        return view('components.tooltip');
    }
}
