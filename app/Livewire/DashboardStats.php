<?php

namespace App\Livewire;

use Livewire\Component;

class DashboardStats extends Component
{
    public array $stats = [];

    public function mount()
    {
        // You can later fetch this from a model or API
        $this->stats = [
            [
                'title' => 'Total SMS Registration',
                'value' => '1,645',
                'color' => 'indigo',
                'icon'  => 'message-square',
            ],
            [
                'title' => 'Total Internal Registration',
                'value' => '94,500',
                'color' => 'emerald',
                'icon'  => 'file-text',
            ],
            [
                'title' => 'Total Number Of Invitees',
                'value' => '582',
                'color' => 'yellow',
                'icon'  => 'users',
            ],
            [
                'title' => 'Total Number Of Radio Invitees',
                'value' => '8,954',
                'color' => 'pink',
                'icon'  => 'radio',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard-stats');
    }
}

