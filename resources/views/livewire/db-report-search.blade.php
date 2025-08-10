<div class="space-y-4">
    <!-- Search Box -->
    <input
        type="text"
        wire:model.debounce.300ms="search"
        placeholder="Search by group or location..."
        class="w-full border px-4 py-2 rounded shadow-sm focus:ring focus:ring-indigo-300"
    />

    <!-- Table -->
    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3 text-left">Group</th>
                    <th class="px-6 py-3 text-left">Total Outreach</th>
                    <th class="px-6 py-3 text-left">Confirmed Today</th>
                    <th class="px-6 py-3 text-left">Yet to Confirm</th>
                    <th class="px-6 py-3 text-left">Expecting Healing</th>
                    <th class="px-6 py-3 text-left">Location</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($reports as $report)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $report->group }}</td>
                        <td class="px-6 py-4">{{ $report->total_outreach }}</td>
                        <td class="px-6 py-4">{{ $report->confirmed_today }}</td>
                        <td class="px-6 py-4">{{ $report->yet_to_confirm }}</td>
                        <td class="px-6 py-4">{{ $report->expecting_healing }}</td>
                        <td class="px-6 py-4">{{ $report->location }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">No reports found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div>
        {{ $reports->links() }}
    </div>
</div>
