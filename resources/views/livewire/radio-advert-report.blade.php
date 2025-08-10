<div class="bg-white rounded-xl shadow overflow-hidden">
    <div class="p-6 border-b border-gray-200 flex items-center justify-between">
        <h2 class="text-lg font-semibold text-gray-800">Radio Advert Report</h2>
        <a href="{{ route('exports.transit-media') }}"
            class="inline-flex items-center px-4 py-2 bg-pink-600 hover:bg-pink-700 text-white text-sm font-medium rounded-lg shadow transition">
            View Details
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-50 text-gray-600 uppercase tracking-wider text-xs">
                <tr>
                    <th class="px-6 py-3 text-left">Radio Stations</th>
                    <th class="px-6 py-3 text-left">Calls Received</th>
                    <th class="px-6 py-3 text-left">Seats Reserved</th>
                    <th class="px-6 py-3 text-left">Number Of Invitees</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($radioReport as $report)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-gray-800">{{ $report['Radio Stations'] }}</td>
                        <td class="px-6 py-4 text-indigo-600 font-bold">{{ $report['Calls Received'] }}</td>
                        <td class="px-6 py-4 text-yellow-600 font-bold">{{ $report['Seats Reserved'] }}</td>
                        <td class="px-6 py-4 text-green-700 font-bold">{{ $report['Number Of Invitees'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
