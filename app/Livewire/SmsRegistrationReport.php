<?php

namespace App\Livewire;

use Livewire\Component;

class SmsRegistrationReport extends Component
{
     public array $smsReports = [];

    public function mount()
    {
        $this->smsReports = [
            [
                'Group' => '',
                'Church' => 120,
                'Type Of SMS' => 120,
                'Number As at Today' => 20,
            ],
        ];
    }

    public function render()
    {
        return view('livewire.sms-registration-report');
    }
}
