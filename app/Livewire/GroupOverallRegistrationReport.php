<?php

namespace App\Livewire;

use Livewire\Component;

class GroupOverallRegistrationReport extends Component
{
    public array $groupRegisterationReports = [];

    public function mount()
    {
        $this->groupRegisterationReports = [
            [
                'Group' => '',
                'Target Attendance' => 0,
                'Number Confirmed Via Registration Link' => 0,
                'Number Yet To confirmed' => 0,
                'Number Confirmed Via Call' => 0,
                'Total Expected attendance' => 0,
                'Number Expecting Healing' => 0,
                'Total Yet To Be Invited' => 0,
            ],
        ];
    }

    public function render()
    {
        return view('livewire.group-overall-registration-report');
    }
}
