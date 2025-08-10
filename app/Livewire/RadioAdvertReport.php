<?php

namespace App\Livewire;

use Livewire\Component;

class RadioAdvertReport extends Component
{
    public array $radioReport = [];

    public function mount()
    {
        // Sample static data
        $this->radioReport = [
            [
                'Radio Stations' => '',
                'Calls Received' => 0,
                'Seats Reserved' => 0,
                'Number Of Invitees' => 0,
            ],
        ];
    }

    public function render()
    {
        return view('livewire.radio-advert-report');
    }
}

