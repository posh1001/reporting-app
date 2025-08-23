<!-- Alpine State Wrapper -->
<div x-data="{ showModal: false }">

    <!-- Report Card -->
    <div @click="showModal = true"
        class="cursor-pointer relative rounded-2xl overflow-hidden max-w-md mx-auto group">

        <!-- Gradient Border -->
        <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 p-[2px]"></div>

        <!-- Card Content -->
        <div class="relative bg-gray-900/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 p-6 border border-gray-700">
            <div class="flex items-center gap-4">
                <div class="bg-gradient-to-br from-blue-900 to-blue-800 p-3 rounded-full">
                    <!-- Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6M5 8h14M5 4h14M5 16h14" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-white">Bus Services <br> Report</h2>
                    <p class="text-sm text-gray-400">Click to open and submit your report</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div x-show="showModal" x-cloak
        @keydown.escape.window="showModal = false"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90">

        <div @click.away="showModal = false"
            class="bg-gray-900 w-full max-w-2xl mx-auto rounded-2xl shadow-2xl p-8 space-y-8 relative border border-gray-700">

            <!-- Close Button -->
            <button @click="showModal = false"
                class="absolute top-4 right-4 text-gray-500 hover:text-gray-300 text-2xl leading-none">
                &times;
            </button>

            <!-- Modal Header -->
            <div class="flex items-center gap-4 border-b border-gray-700 pb-4">
                <div class="bg-blue-900 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6M5 8h14M5 4h14M5 16h14" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-white">Bus Services Report</h2>
                    <p class="text-sm text-gray-400">Please complete the form below to submit your report.</p>
                </div>
            </div>

            <!-- Form -->
            <form action="/bus-service-reports" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf
                <input type="hidden" name="report_type" value="SMS Registration Report">

                <!-- Church -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Church</label>
                    <input type="text" name="church" placeholder="Enter your church"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white
                               placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                </div>

                <!-- Cell Responsible -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Cell Responsible</label>
                    <input type="text" name="cell_responsible" placeholder="Enter cell responsible"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white
                               placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                </div>

                <!-- Leader Responsible -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Leader Responsible</label>
                    <input type="text" name="leader_responsible" placeholder="Enter leader responsible"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white
                               placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                </div>

                <!-- Number To Deliver -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Number To Deliver To Venue</label>
                    <input type="number" name="number_to_deliver" placeholder="0"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white
                               placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                </div>

                <!-- Catchment Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Catchment Name</label>
                    <input type="text" name="catchment_name" placeholder="Enter catchment name"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white
                               placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                </div>

                <!-- Submit Button -->
                <div class="md:col-span-2 flex justify-end pt-4">
                    <button type="submit"
                        class="bg-blue-950 to-indigo-600 hover:from-blue-700 hover:to-indigo-700
                               text-white py-2 px-6 rounded-lg shadow-lg transition">
                        Submit Report
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Optional Cloak Style -->
<style>
    [x-cloak] { display: none; }
</style>
