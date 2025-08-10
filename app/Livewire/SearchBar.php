<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchBar extends Component
{
    public $query = '';
    public $items = [];
    public $results = [];

    public function mount($items = [])
    {
        $this->items = $items;
        $this->results = $items;
    }

    public function updatedQuery()
    {
        $this->results = collect($this->items)
            ->filter(function ($item) {
                return str_contains(strtolower($item), strtolower($this->query));
            })
            ->values()
            ->all();
    }

    public function render()
    {
        return view('livewire.search-bar');
    }
}
