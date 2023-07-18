<?php

namespace App\Http\Livewire\Log;

use App\Models\Log;
use Livewire\Component;

class Item extends Component
{
    public Log $log;

    public bool $displaying = false;

    public function open()
    {
        $this->displaying = ! $this->displaying;
    }

    public function close()
    {
        $this->displaying = ! $this->displaying;
    }

    public function render()
    {
        return view('livewire.log.item');
    }
}
