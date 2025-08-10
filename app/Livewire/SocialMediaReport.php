<?php

namespace App\Livewire;

use Livewire\Component;

class SocialMediaReport extends Component
{

    public array $socialReports = [];

    public function mount()
    {
        // Static example data (you can replace this with database queries later)
        $this->socialReports = [
            [
                'Group' => '',
                'Platform' => '',
                'Total Estimated Reach' => 0,
                'Engagements' => 0,
                'Conversion' => 0,
            ],
        ];
    }

    public function render()
    {
        return view('livewire.social-media-report');
    }
}
