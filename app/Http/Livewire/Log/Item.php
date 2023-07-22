<?php

namespace App\Http\Livewire\Log;

use App\Models\Log;
use App\Models\Trace;
use Livewire\Component;

class Item extends Component
{
    public Log $log;

    public Trace $trace;

    public function selectTrace(int $id)
    {
        $this->trace = Trace::find($id);
    }

    public function mount()
    {
        $this->trace = $this->log->main_trace;
    }

    public function render()
    {
        return view('livewire.log.item');
    }
}
