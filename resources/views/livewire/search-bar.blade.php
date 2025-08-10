<div class="relative">
    <input
        type="text"
        placeholder="Search..."
        wire:model.debounce.300ms="query"
        class="w-64 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
    />

    @if (!empty($query))
        <ul class="absolute mt-2 w-full bg-white border border-gray-200 rounded-md shadow-lg z-50">
            @forelse ($results as $item)
                <li class="px-4 py-2 hover:bg-gray-100 text-sm cursor-pointer">
                    {{ $item }}
                </li>
            @empty
                <li class="px-4 py-2 text-gray-500 text-sm italic">No results found.</li>
            @endforelse
        </ul>
    @endif
</div>
