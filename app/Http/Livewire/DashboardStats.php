<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardStats extends Component
{
    public $stats = [];

    public function mount()
    {
        $this->updateStats();
    }

    public function updateStats()
    {
        // Replace with real DB queries
        $this->stats = [
            [
                'title' => 'Total Users',
                'value' => number_format(rand(1000, 5000)),
                'color' => 'from-indigo-500 to-purple-500',
            ],
            [
                'title' => 'Sales Today',
                'value' => '$' . number_format(rand(2000, 10000)),
                'color' => 'from-green-500 to-emerald-500',
            ],
            [
                'title' => 'Active Sessions',
                'value' => number_format(rand(50, 300)),
                'color' => 'from-pink-500 to-rose-500',
            ],
            [
                'title' => 'Server Load',
                'value' => rand(20, 80) . '%',
                'color' => 'from-yellow-500 to-orange-500',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard-stats');
    }
}
