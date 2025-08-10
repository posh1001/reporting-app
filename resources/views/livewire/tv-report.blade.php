<div class="bg-white rounded-xl shadow overflow-hidden">
    <div class="p-6 border-b border-gray-200 flex items-center justify-between">
        <h2 class="text-lg font-semibold text-gray-800">TV Report</h2>
        <a href="{{ route('exports.transit-media') }}"
           class="inline-flex items-center px-4 py-2 bg-pink-600 hover:bg-pink-700 text-white text-sm font-medium rounded-lg shadow transition">
            View Details
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-50 text-gray-600 uppercase tracking-wider text-xs">
                <tr>
                    <th class="px-6 py-3 text-left">TV Station</th>
                    <th class="px-6 py-3 text-left">Avaliable Slots</th>
                    <th class="px-6 py-3 text-left">Total Slot Required</th>
                    <th class="px-6 py-3 text-left">Total Slot Done</th>
                    <th class="px-6 py-3 text-left">Total Yet To Be Commissioned</th>
                    <th class="px-6 py-3 text-left">Resources Required</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($tvReports as $report)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-gray-800">{{ $report['TV Station'] }}</td>
                        <td class="px-6 py-4 text-indigo-600 font-bold">{{ $report['Avaliable Slots'] }}</td>
                        <td class="px-6 py-4 text-green-700 font-semibold">{{ $report['Total Slot Required'] }}</td>
                        <td class="px-6 py-4 text-indigo-600 font-bold">{{ $report['Total Slot Done'] }}</td>
                        <td class="px-6 py-4 text-green-700 font-semibold">{{ $report['Total Yet To Be Commissioned'] }}</td>
                        <td class="px-6 py-4 text-gray-500 font-bold">{{ $report['Resources Required'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
