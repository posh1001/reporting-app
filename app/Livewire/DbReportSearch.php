<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class DbReportSearch extends Component
{
    use WithPagination;

    public string $search = '';

    public function updatingSearch()
    {
        // Reset to first page whenever the search term changes
        $this->resetPage();
    }

    public function render()
    {
        $reports = DbReportSearch::query()
            ->where('group', 'like', '%' . $this->search . '%')
            ->orWhere('location', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.db-report-search', compact('reports'));
    }
}

