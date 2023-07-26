<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class Table extends Component
{
    public $title = 'Table';

    public $subtitle = 'Subtitle';

    public $action = 'Action';

    public array $headers = [];

    public bool $empty = false;

    public Collection $items;

    public function render()
    {
        return view('livewire.table');
    }
}
