<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Submit Reports' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    {{ $slot }}

    <footer class="bg-white rounded-lg shadow-sm dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3">
                    <img src="/images/logo.png" class="h-8" alt="Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CELZ5</span>
                </a>
                <button class="bg-blue-600 text-white font-semibold px-4 py-2 rounded">Logout</button>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
                © 2023 <a href="#" class="hover:underline">Christ Embassy LZ5</a>. All Rights Reserved.
            </span>
        </div>
    </footer>

    @livewireScripts
    <script>
        document.addEventListener('alpine:init', () => {
            feather.replace()
        });
        window.addEventListener('load', () => {
            feather.replace()
        });
    </script>
</body>
</html>
