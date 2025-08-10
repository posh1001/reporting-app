<?php

namespace App\Livewire;

use Livewire\Component;

class CallCenterReport extends Component
{
    public array $callCenterReports = [];

    public function mount()
    {

        $this->callCenterReports = [
            [
                'Group' => ' ',
                'total_outreach' => 0,
                'confirmed_today' => 0,
                'yet_to_confirm' => 0,
                'expecting_healing' => 0,
                'location' => '',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.call-center-report');
    }
}
