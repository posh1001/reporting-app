<?php

namespace App\Livewire;

use Livewire\Component;

class ChurchSummaryAttendanceReport extends Component
{
    public array $churchAttendanceReports = [];

    public function mount()
    {
        // Sample static data (can be replaced with DB later)
        $this->churchAttendanceReports = [
            [
                'Church' => '',
                'Membership Strength' => 0,
                'Number Confirmed Today' => 0,
                'Number Yet To confirmed' => 0,
                'Number Coming With Own Cars' => 0,
                'Number Coming With Bus' => 0,
                'Number Expecting Healing' => 0,
            ],
        ];
}
};
