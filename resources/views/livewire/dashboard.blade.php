@extends('layouts.app')

@section('content')
<div class="p-6 space-y-8">
    <!-- Stats Cards -->
    <div wire:poll.5s="updateStats" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
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

    <!-- Table -->
    <div class="bg-white dark:bg-gray-900 shadow-lg rounded-xl overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-800">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Role</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Joined</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach($users as $user)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                        <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ $user['name'] }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $user['email'] }}</td>
                        <td class="px-6 py-4 text-sm">
                            <span class="px-3 py-1 rounded-full text-xs font-medium
                                {{ $user['role'] === 'Admin' ? 'bg-red-100 text-red-700 dark:bg-red-700 dark:text-white' : 'bg-green-100 text-green-700 dark:bg-green-700 dark:text-white' }}">
                                {{ $user['role'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $user['created_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
