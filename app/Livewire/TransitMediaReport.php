<?php

namespace App\Livewire;

use Livewire\Component;

class TransitMediaReport extends Component
{
     public array $transitMediaReports = [];

    public function mount()
    {
        $this->transitMediaReports = [
            [
                'Group' => '',
                'Mode' => '',
                'Total Number In Lagos Island' => 0,
                'Location' => 0,
                'Total Number In Eti-Osa LGA' => 0,
                'Total Number Commissioned In Eti-Osa' => 0,
                'Total Number In Ibeju-Lekki LGA' => 20,
                'Total Number Commisioned In Ibeju-Lekki' => 0,
                'Total Number In Epe LGA' => 0,
                'Total Number Commissioned In Epe' => 0,
            ],
        ];
    }

    public function render()
    {
        return view('livewire.transit-media-report');
    }
}
