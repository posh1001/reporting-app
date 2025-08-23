<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Submit Reports - CELZ5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-900 text-gray-800">

    <!-- Main Container -->
    <div class="min-h-screen flex flex-col">

        <!-- Header -->
        <header class="bg-gray-900">
            <div class="container mx-auto flex justify-between items-center py-5 px-6  border-gray-800">
                <div class="flex items-center space-x-3">
                    <img src="/images/logo.png" alt="Logo" class="h-10">
                    <h1 class="text-2xl font-bold text-blue-700">CELZ5 Report Portal</h1>
                </div>
                <form action="/logout" method="POST">
                    @csrf
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow transition">
                        Logout
                    </button>
                </form>
            </div>
        </header>
        <hr class="h-1/2 my-6 bg-gray-200 border-gray-700 dark:bg-white-800">
        <!-- Page Content -->
        <main class="flex-grow container mx-auto px-4 py-10" x-data="{ activeModal: null }">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <h2 class="text-3xl font-bold text-blue-600">Submit Your Reports</h2>
                <p class="text-gray-500 mt-2">Choose the report type below and fill out the required details quickly and
                    easily.</p>
            </div>

            @if (session('success'))
                <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-lg mb-6 text-center">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Reports Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Add more forms/components here -->
                {{-- <x-forms.church-service-form /> --}}
                <x-forms.dignitaries />
                <x-forms.bus-services-form />
                <x-forms.call-center-form />
                 <x-forms.program-organization />
                <x-forms.sms-report />
                 <x-forms.radio-form />
                <x-forms.outdoor-publicity-form />
                 <x-forms.tv-form />
                <x-forms.social-media-form />
                <x-forms.cell-ministry-invitee-registration />
                 <x-forms.evangelism-squad />
                <x-forms.church-summary-attendance-form />
                <x-forms.group-overall-reg-form />
                <x-forms.mass-media-form />
                <x-forms.transit-media-form />

            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white border-t mt-10 border-gray-700">
            <div
                class="container mx-auto py-6 px-6 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <img src="/images/logo.png" class="h-8" alt="Logo">
                    <span class="text-lg font-semibold text-gray-700">CELZ5</span>
                </div>
                <span class="text-sm text-gray-500">© 2025 Christ Embassy LZ5. All Rights Reserved.</span>
            </div>
        </footer>

    </div>

    <!-- Feather Icons Init -->
    <script>
        document.addEventListener('alpine:init', () => {
            feather.replace();
        });
        window.addEventListener('load', () => {
            feather.replace();
        });
    </script>

</body>

</html>
