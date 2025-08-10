<?php

namespace App\Livewire;

use Livewire\Component;

class ChurchServiceReport extends Component
{
    public array $churchServiceReports = [];

    public function mount()
    {
        // Static sample data
        $this->churchServiceReports = [
            [
                'Group' => '',
                'Church' => '',
                'Products' => 0,
                'Total Required' => 0,
                'Total Aired/Deployed In Church' => 0,
                'Total Languages For Language Church' => 0,
            ],
            // Add more rows as needed
        ];
    }

    public function render()
    {
        return view('livewire.church-service-report');
    }
}
