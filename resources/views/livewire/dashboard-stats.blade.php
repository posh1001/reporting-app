<div wire:poll.5s="updateStats" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-6">
    @foreach($stats as $stat)
        <div class="bg-gradient-to-r {{ $stat['color'] }} p-[2px] rounded-2xl shadow-lg">
            <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 flex flex-col justify-between h-full">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $stat['title'] }}</h2>
                <p class="text-3xl font-bold mt-3 text-gray-900 dark:text-white">{{ $stat['value'] }}</p>
                <div wire:loading wire:target="updateStats" class="mt-4 animate-pulse h-2 bg-gray-200 rounded-full"></div>
            </div>
        </div>
    @endforeach
</div>
