<?php

namespace App\Livewire;

use Livewire\Component;

class GroupSummaryAttendanceReport extends Component
{
   public array $groupAttendanceReports = [];

    public function mount()
    {
        // Static placeholder data
        $this->groupAttendanceReports = [
            [
                'Group' => '',
                'Membership Strength' => 0,
                'Number Confirmed Today' => 0,
                'Number Yet To confirmed' => 0,
                'Number Coming With Own Cars' => 0,
                'Number Coming With Bus' => 0,
                'Number Expecting Healing' => 0,
            ],
        ];
    }

    public function render()
    {
        return view('livewire.group-summary-attendance-report');
    }
}
