<div class="bg-white rounded-xl shadow overflow-hidden">
    <div class="p-6 border-b border-gray-200 flex items-center justify-between">
        <h2 class="text-lg font-semibold text-gray-800">Church Overall Registration Report</h2>
        <a href="{{ route('exports.transit-media') }}"
            class="inline-flex items-center px-4 py-2 bg-pink-600 hover:bg-pink-700 text-white text-sm font-medium rounded-lg shadow transition">
            View Details
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-50 text-gray-600 uppercase tracking-wider text-xs">
                <tr>
                    <th class="px-6 py-3 text-left">Church</th>
                    <th class="px-6 py-3 text-left">Target Attendance</th>
                    <th class="px-6 py-3 text-left">Number Confirmed Via Registration Link</th>
                    <th class="px-6 py-3 text-left">Number Yet To confirmed</th>
                    <th class="px-6 py-3 text-left">Number Confirmed Via Call Center</th>
                    <th class="px-6 py-3 text-left">Number Of Invitees</th>
                    <th class="px-6 py-3 text-left">Total Expected attendance</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($churchRegistrationReports as $report)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-bold text-gray-800">{{ $report['Group'] }}</td>
                        <td class="px-6 py-4 text-indigo-600 font-bold">{{ $report['Target Attendance'] }}</td>
                        <td class="px-6 py-4 font-bold">{{ $report['Number Confirmed Via Registration Link'] }}</td>
                        <td class="px-6 py-4 text-yellow-600 font-bold">{{ $report['Number Yet To confirmed'] }}</td>
                        <td class="px-6 py-4 text-green-700 font-bold">{{ $report['Number Confirmed Via Call Center'] }}</td>
                        <td class="px-6 py-4 font-bold">{{ $report['Number Of Invitees'] }}</td>
                        <td class="px-6 py-4 text-green-700 font-bold">{{ $report['Total Expected Attendance'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
