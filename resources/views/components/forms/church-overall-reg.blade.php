{{-- <!-- Card Trigger -->
<div @click="open = true"
    class="cursor-pointer bg-white rounded-xl shadow hover:shadow-lg transform hover:-translate-y-1 transition p-6 border-t-4 border-green-500">
    <div class="flex items-center gap-3">
        <i data-feather="message-square" class="text-green-500 w-6 h-6"></i>
        <h3 class="text-lg font-semibold">Church Overall <br>Registration Report</h3>
    </div>
</div>

<!-- Modal -->
<div x-data="{ open: false }">
    <div x-show="open"
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-60 z-50"
        x-transition.opacity>

        <div @click.away="open = false"
            x-show="open"
            x-transition
            class="bg-gray-900 rounded-xl shadow-lg w-full max-w-lg p-6 border border-green-500 relative">

            <!-- Close Button -->
            <button @click="open = false" class="absolute top-3 right-3 text-gray-400 hover:text-white">
                ✕
            </button>

            <!-- Modal Title -->
            <h2 class="text-2xl font-bold text-green-400 mb-4">Church Overall Registration Report</h2>

            <!-- Form -->
            <form action="/reports/sms-registration" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="report_type" value="SMS Registration Report">

                <div>
                    <label class="block text-sm font-medium text-gray-200">Church</label>
                    <input type="number" name="church"
                        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-600 bg-gray-800 text-white focus:ring-2 focus:ring-green-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200">Attendance Target</label>
                    <input type="text" name="attendance_target"
                        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-600 bg-gray-800 text-white focus:ring-2 focus:ring-green-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200">Number Confirmed Via Registration Link</label>
                    <input type="number" name="confirmed_via_link"
                        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-600 bg-gray-800 text-white focus:ring-2 focus:ring-green-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200">Number Yet to Confirm</label>
                    <input type="number" name="yet_to_confirm"
                        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-600 bg-gray-800 text-white focus:ring-2 focus:ring-green-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200">Number Confirmed Via Call Center</label>
                    <input type="number" name="confirmed_via_call_center"
                        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-600 bg-gray-800 text-white focus:ring-2 focus:ring-green-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200">Number Of Invitees</label>
                    <input type="number" name="invitees"
                        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-600 bg-gray-800 text-white focus:ring-2 focus:ring-green-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200">Total Expected Attendance</label>
                    <input type="number" name="expected_attendance"
                        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-600 bg-gray-800 text-white focus:ring-2 focus:ring-green-500 focus:outline-none">
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-5 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
                        Submit Report
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>







{{-- <input type="hidden" name="report_type" value="SMS Registration Report">

<div>
    <label class="block text-sm font-medium text-gray-700">Church</label>
    <input type="number" placeholder=""
        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
</div>
<div>
    <label class="block text-sm font-medium text-gray-700">Attendance Target</label>
    <input type="text" placeholder=""
        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
</div>
<div>

</div>
<div>
    <label class="block text-sm font-medium text-gray-700">Number Confirmed Via Registration Link</label>
    <input type="number" placeholder=""
        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
</div>
<div>
    <label class="block text-sm font-medium text-gray-700">Number Yet to Confirm</label>
    <input type="number" placeholder=""
        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
</div>
<div>
    <label class="block text-sm font-medium text-gray-700">Number Confirmed Via Call Center</label>
    <input type="number" placeholder=""
        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
</div>
<div>
    <label class="block text-sm font-medium text-gray-700">Number Of Invitees</label>
    <input type="number" placeholder=""
        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
</div>
<div>
    <label class="block text-sm font-medium text-gray-700">Total expected Attendance</label>
    <input type="number" placeholder=""
        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
</div>
 --}}





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
                    <h2 class="text-lg font-semibold text-white">Church Overall <br>Registration Report</h2>
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
                    <h2 class="text-xl font-semibold text-white">Church Overall <br> Registration Report</h2>
                    <p class="text-sm text-gray-400">Please complete the form below to submit your report.</p>
                </div>
            </div>

            <!-- Form Body -->
            <form action="/church-registration-reports" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf

                <!-- Church -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Church</label>
                    <input type="text" name="church" placeholder="Enter your church"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Attendance Target -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Target Attendance</label>
                    <input type="number" name="attendance_target" placeholder="0"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Confirmed Via Link -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Number Confirmed Via Registration
                        Link</label>
                    <input type="number" name="confirmed_via_link" placeholder="0"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Yet to Confirm -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Number Yet To Confirm</label>
                    <input type="number" name="yet_to_confirm" placeholder="0"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Confirmed Via Call Center -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Number Confirmed Via Call Center</label>
                    <input type="number" name="confirmed_via_call_center" placeholder="0"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Invitees -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Number Of Invitees</label>
                    <input type="number" name="invitees" placeholder="0"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Expected Attendance -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Total expected Attendance</label>
                    <input type="number" name="expected_attendance" placeholder="0"
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Submit Button -->
                <div class="md:col-span-2 flex justify-end pt-4">
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
