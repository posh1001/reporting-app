<div class="bg-white rounded-xl shadow overflow-hidden">
    <div class="p-6 border-b border-gray-200 flex items-center justify-between">
        <h2 class="text-lg font-semibold text-gray-800">Social Media Report</h2>
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
                    <th class="px-6 py-3 text-left">Platform</th>
                    <th class="px-6 py-3 text-left">Total Estimated Reach</th>
                    <th class="px-6 py-3 text-left">Engagements</th>
                    <th class="px-6 py-3 text-left">Conversion</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($socialReports as $report)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-gray-800">{{ $report['Group'] }}</td>
                        <td class="px-6 py-4 text-indigo-600 font-bold">{{ $report['Platform'] }}</td>
                        <td class="px-6 py-4 text-yellow-600 font-bold">{{ $report['Total Estimated Reach'] }}</td>
                        <td class="px-6 py-4 font-bold text-gray-800">{{ $report['Engagements'] }}</td>
                        <td class="px-6 py-4 text-green-700 font-bold">{{ $report['Conversion'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
