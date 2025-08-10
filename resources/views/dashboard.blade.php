<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    @vite('resources/css/app.css')

    @livewireStyles

    <!-- Feather Icons & Alpine.js -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-gradient-to-br from-indigo-50 to-violet-100 text-gray-900 font-sans antialiased">
    <div class="min-h-screen flex">

        <x-side-bar />

        <div class="flex-1 flex flex-col">

            <x-top-bar />

            <main class="flex-1 p-6 space-y-8">

                @livewire('dashboard-stats')

                <livewire:social-media-report />

            </main>
        </div>
    </div>

    @livewireScripts
    <!-- Feather Icons Activation -->
    <script>
        feather.replace()
    </script>
</body>

</html>
