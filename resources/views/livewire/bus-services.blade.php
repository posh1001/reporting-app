<div class="bg-white rounded-xl shadow overflow-hidden">
    <div class="p-6 border-b border-gray-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <h2 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
            <i data-feather="truck" class="w-5 h-5 text-pink-600"></i>
            Bus Services
        </h2>
        <a href="{{ route('exports.transit-media') }}"
           class="inline-flex items-center px-4 py-2 bg-pink-600 hover:bg-pink-700 text-white text-sm font-medium rounded-lg shadow transition">
            View Details
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-gray-700">
            <thead class="bg-gray-50 text-gray-600 uppercase tracking-wider text-xs">
                <tr>
                    <th class="px-6 py-3 text-left">Group</th>
                    <th class="px-6 py-3 text-left">Church</th>
                    <th class="px-6 py-3 text-left">Cell Responsible</th>
                    <th class="px-6 py-3 text-left">Leader Responsible</th>
                    <th class="px-6 py-3 text-left">No. to Deliver to Venue</th>
                    <th class="px-6 py-3 text-left">Catchment Name</th>
                    <th class="px-6 py-3 text-left">Expecting Healing</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 bg-white">
                @foreach ($busServices as $report)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $report['Group'] }}</td>
                        <td class="px-6 py-4">{{ $report['Church'] }}</td>
                        <td class="px-6 py-4 text-yellow-700">{{ $report['Cell Responsible'] }}</td>
                        <td class="px-6 py-4">{{ $report['Leader Responsible'] }}</td>
                        <td class="px-6 py-4 text-green-700 font-semibold">{{ $report['Number Of people to deliver to the venue'] }}</td>
                        <td class="px-6 py-4">{{ $report['Name of catchment'] }}</td>
                        <td class="px-6 py-4 text-indigo-600 font-semibold">{{ $report['Number Expecting Healing'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
