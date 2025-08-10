<?php

namespace App\Livewire;

use Livewire\Component;

class BusServices extends Component
{
    public array $busServices = [];

    public function mount()
{
    $this->busServices = [/* data here */];
}

    public function render()
    {
        return view('livewire.bus-services');
    }
}
