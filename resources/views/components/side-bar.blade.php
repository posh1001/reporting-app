<aside class="w-64 bg-white shadow-xl hidden md:flex flex-col">
    <div class="h-20 flex items-center justify-center text-2xl font-bold text-indigo-600 border-b">My Admin</div>

    <nav class="flex-1 px-6 py-4 space-y-2">

        <!-- SMS Registration -->
        <x-nav-link href="/sms-registration" :active="request()->is('sms-registration')" icon="message-square">
            SMS Registration
        </x-nav-link>

        <!-- Call Center -->
        <x-nav-link href="/call" :active="request()->is('call')" icon="phone-call">
            Call Center
        </x-nav-link>

        <!-- Church Services -->
        <x-nav-link href="/service" :active="request()->is('service')" icon="calendar">
            Church Service
        </x-nav-link>

        <!---- Bus Services ------>
        <x-nav-link href="/bus" :active="request()->is('bus')" icon="truck">
            Bus Services
        </x-nav-link>


        <!-- Group / Church Dropdown -->
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open"
                class="w-full flex items-center justify-between px-2 py-2 rounded-lg hover:bg-emerald-100 text-emerald-600 font-medium focus:outline-none">
                <span class="flex items-center gap-2">
                    <i data-feather="users"></i> Group/Church
                </span>
                <i data-feather="chevron-down" class="w-4 h-4"></i>
            </button>

            <div x-show="open" @click.away="open = false" x-cloak
                class="mt-2 ml-2 bg-white border border-emerald-200 rounded-lg shadow-md w-[90%] space-y-1 py-2 transition-all">
                <a href="/group-attendance"
                    class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                    <i data-feather="user"></i> Group Summary Attendance
                </a>
                <a href="/church-attendance"
                    class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                    <i data-feather="user-check"></i> Church Summary Attendance
                </a>
                <a href="/group-registration"
                    class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                    <i data-feather="user-plus"></i> Group Overall Registration
                </a>
                <a href="/church-registration"
                    class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                    <i data-feather="user-plus"></i> Church Overall Registration
                </a>
            </div>
        </div>

        <!-- Publicity Dropdown -->
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open"
                class="w-full flex items-center justify-between px-4 py-2 rounded-lg hover:bg-pink-100 text-pink-600 font-medium focus:outline-none">
                <span class="flex items-center gap-2">
                    <i data-feather="megaphone"></i> Publicity
                </span>
                <i data-feather="chevron-down" class="w-4 h-4"></i>
            </button>

            <div x-show="open" @click.away="open = false" x-cloak
                class="mt-2 ml-2 bg-white border border-pink-200 rounded-lg shadow-md w-[90%] space-y-1 py-2 transition-all">
                <a href="/mass" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-pink-50">
                    <i data-feather="file-text"></i> Mass Media
                </a>
                <a href="/radio" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-pink-50">
                    <i data-feather="speaker"></i> Radio Adverts
                </a>
                <a href="/transit" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-pink-50">
                    <i data-feather="truck"></i> Transit Media
                </a>
                <a href="/tv" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-pink-50">
                    <i data-feather="tv"></i> TV
                </a>
                <a href="/social-media"
                    class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-pink-50">
                    <i data-feather="share-2"></i> Social Media
                </a>
            </div>
        </div>

    </nav>

    <div class="p-4 text-center text-sm text-gray-400 border-t">© 2025 CELZ5</div>
</aside>
