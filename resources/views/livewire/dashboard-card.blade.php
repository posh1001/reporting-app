<div class="bg-white p-6 rounded shadow">
    <h3 class="text-lg font-bold">Dashboard Card</h3>
    <p class="text-xl">Count: {{ $count }}</p>
    <button wire:click="increment"
            class="mt-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        Increment
    </button>
</div>
