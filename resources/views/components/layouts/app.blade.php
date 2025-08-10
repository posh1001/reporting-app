<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Dashboard' }}</title>

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- or use mix if you're using Laravel Mix --}}
    @livewireStyles
</head>

<body class="bg-gradient-to-br from-indigo-50 to-violet-100 text-gray-900 font-sans antialiased">
    <div class="min-h-screen flex">
        {{-- Sidebar Blade Component --}}
        <x-side-bar />
        <!-- Main content area -->
        <div class="flex-1 flex flex-col">

            <!-- Topbar -->
            <header class="h-20 bg-white shadow flex items-center justify-between px-6">
                <h1 class="text-xl font-semibold text-indigo-700">Dashboard</h1>
                <div class="flex items-center gap-4">
                    <input type="text" placeholder="Search..."
                        class="rounded-md border border-gray-300 px-3 py-1.5 text-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <img src="https://i.pravatar.cc/40" class="w-9 h-9 rounded-full ring-2 ring-indigo-500"
                        alt="Avatar">
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 p-6 space-y-8">

                  <x-card />

                {{ $slot }}

            </main>
        </div>
    </div>


    @livewireScripts
     <script>
        feather.replace()
    </script>
</body>

</html>
