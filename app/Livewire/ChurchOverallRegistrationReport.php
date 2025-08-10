<?php

namespace App\Livewire;

use Livewire\Component;

class ChurchOverallRegistrationReport extends Component
{
    public array $churchRegistrationReports = [];

    public function mount()
    {
        // Static placeholder data
        $this->churchRegistrationReports = [
            [
                'Group' => '',
                'Target Attendance' => 0,
                'Number Confirmed Via Registration Link' => 0,
                'Number Yet To confirmed' => 0,
                'Number Confirmed Via Call Center' => 0,
                'Number Of Invitees' => 0,
                'Total Expected Attendance' => 0,
            ],
        ];
    }

    public function render()
    {
        return view('livewire.church-overall-registration-report');
    }
}
