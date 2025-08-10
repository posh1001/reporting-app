<div class="bg-white rounded-xl shadow overflow-hidden">
    <div class="p-6 border-b border-gray-200 flex items-center justify-between">
        <h2 class="text-lg font-semibold text-gray-800">SMS Registration Report</h2>
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
                    <th class="px-6 py-3 text-left">Type Of SMS</th>
                    <th class="px-6 py-3 text-left">Number as at Today</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($smsReports as $report)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-gray-800">{{ $report['Group'] }}</td>
                        <td class="px-6 py-4">{{ $report['Church'] }}</td>
                        <td class="px-6 py-4">{{ $report['Type Of SMS'] }}</td>
                        <td class="px-6 py-4">{{ $report['Number As at Today'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
