<!-- Alpine State Wrapper -->
<div x-data="{ showModal: false }">

    <!-- Report Card -->
    <div @click="showModal = true" class="cursor-pointer relative rounded-2xl overflow-hidden max-w-md mx-auto group">

        <!-- Gradient Border -->
        <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 p-[2px]">
        </div>

        <!-- Card Content (Dark Mode) -->
        <div
            class="relative bg-gray-900/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 p-6 border border-gray-700">
            <div class="flex items-center gap-4">
                <div class="bg-gradient-to-br from-blue-900 to-blue-800 p-3 rounded-full">
                    <!-- Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6M5 8h14M5 4h14M5 16h14" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-white">Mass Media <br>Report</h2>
                    <p class="text-sm text-gray-400">Click to open and submit your report</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div x-show="showModal" x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm">
        <div @click.away="showModal = false"
            class="bg-gray-900 w-full max-w-2xl mx-auto rounded-2xl shadow-2xl p-8 space-y-8 relative animate-fadeIn border border-gray-700">

            <!-- Close Button -->
            <button @click="showModal = false"
                class="absolute top-4 right-4 text-gray-500 hover:text-gray-300 text-2xl leading-none">
                &times;
            </button>

            <!-- Modal Header -->
            <div class="flex items-center gap-4 border-b border-gray-700 pb-4">
                <div class="bg-blue-900 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6M5 8h14M5 4h14M5 16h14" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-white">Mass Media <br> Report</h2>
                    <p class="text-sm text-gray-400">Please complete the form below to submit your report.</p>
                </div>
            </div>

            <!-- Form Body -->
            <form action="/church-registration-reports" method="POST" class="grid grid-cols-2 gap-6"
                style="overflow: auto">
                @csrf

                <!-- Church -->
                <div>
                    <x-home-form />
                </div>

                <!-- Membership Strength -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Church</label>
                    <input type="text" name="church" placeholder="Enter you church"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm text-gray-500 mb-1">Platform</label>
                    <select name="platform"
                        class="w-full bg-gray-900 text-white hover-white px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                        <option value="" disabled selected>Select Platform</option>
                        <option value="led_screen">LED Screens</option>
                        <option value="static_boards">Static Boards</option>
                        <option value="lamp_post">Lamp Posts</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm text-gray-500 mb-1">Location</label>
                    <select name="location"
                        class="w-full bg-gray-900 text-white hover-white px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                        <option value="" disabled selected>Select Location</option>
                        <option value="lagos_island">Lagos Island</option>
                        <option value="eti-osa">Eti-Osa</option>
                        <option value="epe">Epe</option>
                        <option value="ibeju_lekki">Ibeju-Lekki</option>
                    </select>
                </div>

                <!-- Number coming with own cars -->
                <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1">Total conmissioned number in
                        eti-osa</label>
                    <input type="number" name="number_commissioned_in_eti_osa" placeholder="0"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Number expecting healing -->
                <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1">Total commissioned in Ibeju
                        Lekki</label>
                    <input type="number" name="total_number_commissioned_in_ibeju_lekki" placeholder="0"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1">Total commissioned in Epe</label>
                    <input type="number" name="total_number_commissioned_in_epe" placeholder="0"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1">Number of contect that have come to
                        church</label>
                    <input type="number" name="number_of_contact_that_have_come_to_church" placeholder="0"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Submit Button (span all 3 columns on md+) -->
                <div class="col-span-2 flex justify-end pt-4">
                    <button type="submit"
                        class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white py-2 px-6 rounded-lg shadow-lg transition">
                        Submit Report
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

<!-- Optional Fade Animation -->
<style>
    [x-cloak] {
        display: none;
    }

    .animate-fadeIn {
        animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
