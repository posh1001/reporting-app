<div class="bg-white rounded-xl shadow overflow-hidden">
    <div class="p-6 border-b border-gray-200 flex items-center justify-between">
        <h2 class="text-lg font-semibold text-gray-800">Church Service Report</h2>
        <a href="{{ route('exports.transit-media') }}"
           class="inline-flex items-center px-4 py-2 bg-pink-600 hover:bg-pink-700 text-white text-sm font-medium rounded-lg shadow transition">
            View Details
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-50 text-gray-600 uppercase tracking-wider text-xs">
                <tr>
                    <th class="px-6 py-3 text-left">Group</th>
                    <th class="px-6 py-3 text-left">Church</th>
                    <th class="px-6 py-3 text-left">Products</th>
                    <th class="px-6 py-3 text-left">Total Required</th>
                    <th class="px-6 py-3 text-left">Total Aired/Deployed In Church</th>
                    <th class="px-6 py-3 text-left">Total Languages For Language Church</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($churchServiceReports as $report)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-gray-800">{{ $report['Group'] }}</td>
                        <td class="px-6 py-4">{{ $report['Church'] }}</td>
                        <td class="px-6 py-4 text-green-700 font-semibold">{{ $report['Products'] }}</td>
                        <td class="px-6 py-4 text-yellow-600 font-semibold">{{ $report['Total Required'] }}</td>
                        <td class="px-6 py-4 text-indigo-600 font-semibold">{{ $report['Total Aired/Deployed In Church'] }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ $report['Total Languages For Language Church'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
