<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public $stats = [];

    public function mount()
    {
        $this->updateStats();
    }

    public function updateStats()
    {
        // Replace with DB queries in real app
        $this->stats = [
            ['title' => 'Total Users', 'value' => number_format(rand(1000, 5000)), 'color' => 'from-indigo-500 to-purple-500'],
            ['title' => 'Sales Today', 'value' => '$' . number_format(rand(2000, 10000)), 'color' => 'from-green-500 to-emerald-500'],
            ['title' => 'Active Sessions', 'value' => number_format(rand(50, 300)), 'color' => 'from-pink-500 to-rose-500'],
            ['title' => 'Server Load', 'value' => rand(20, 80) . '%', 'color' => 'from-yellow-500 to-orange-500'],
        ];
    }

    public function render()
    {
        // Example table data (replace with DB queries)
        $users = collect(range(1, 10))->map(function ($i) {
            return [
                'name' => "User {$i}",
                'email' => "user{$i}@example.com",
                'role' => $i % 2 === 0 ? 'Admin' : 'Member',
                'created_at' => now()->subDays(rand(1, 100))->format('Y-m-d'),
            ];
        });

        return view('livewire.dashboard', [
            'users' => $users
        ]);
    }
}
