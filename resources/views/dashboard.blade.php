<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Dashboard</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-100 dark:bg-gray-800 min-h-screen">

    <header class="bg-white dark:bg-gray-900 shadow p-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200">📊 Realtime Dashboard</h1>
    </header>

    <main class="max-w-7xl mx-auto py-6">
        @livewire('dashboard-stats')
    </main>

    @livewireScripts
</body>
</html>
