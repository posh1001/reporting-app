<?php

namespace App\Livewire;

use Livewire\Component;

class MassMediaReport extends Component
{
    public array $massMediaReports = [];

    public function mount()
    {
        $this->massMediaReports = [
            [
                'Group' => '',
                'Platform' => '',
                'Total Number In Lagos Island' => 0,
                'Location' => '',
                'Total Number In Eti-Osa LGA' => 0,
                'Total Number Commissioned In Eti-Osa' => 0,
                'Total Number In Ibeju-Lekki LGA' => 0,
                'Total Number Commissioned In Ibeju-Lekki' => 0,
                'Total Number In Epe LGA' => 0,
                'Total Number Commissioned In Epe' => 0,
            ],
        ];
    }

    public function render()
    {
        return view('livewire.mass-media-report');
    }
}
