<?php

namespace App\Livewire;

use Livewire\Component;

class TvReport extends Component
{
    public array $tvReports = [];

    public function mount()
    {
        $this->tvReports = [
            [
                'TV Station' => '',
                'Avaliable Slots' => 0,
                'Total Slot Required' => 0,
                'Total Slot Done' => 20,
                'Total Yet To Be Commissioned' => 0,
                'Resources Required' => 0,
            ],
        ];
    }

    public function render()
    {
        return view('livewire.tv-report');
    }
}
