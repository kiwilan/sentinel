<?php

namespace App\View\Components\Data;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  string[]  $head
     * @param  Collection<int, Model>  $models
     */
    public function __construct(
        public array $head = [],
        public ?Collection $models = null,
        public string $title = 'Models',
        public string $subtitle = 'A list of all the models.',
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if ($this->models === null) {
            $this->models = collect();
        }

        return view('components.data.table');
    }
}
