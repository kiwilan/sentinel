<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;

class Head extends Component
{
    public array $headers = [];

    public bool $reversed = false;

    public string $reverse = '';

    protected $listeners = [
        'headReverse' => 'reverse',
    ];

    public function sort(string $field): void
    {
        $this->emit('tableSort', $field);
    }

    public function reverse(string $field): void
    {
        ray($field);
        $this->reverse = $field;
    }

    public function render()
    {
        return view('livewire.table.head');
    }
}
