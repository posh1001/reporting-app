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
                    <h2 class="text-lg font-semibold text-white">Program Organization Report</h2>
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
                    <h2 class="text-xl font-semibold text-white">Program Organization Report</h2>
                    <p class="text-sm text-gray-400">Please complete the form below to submit your report.</p>
                </div>
            </div>

            <!-- Form Body -->
            <form action="{{ route('program-organization.store') }}" method="POST"
                class="grid grid-cols-4 gap-6">
                @csrf
                <!-- Church -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">SubCommittee</label>
                    <input type="text" name="sub_committee" placeholder=""
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Attendance Target -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Chairman</label>
                    <input type="text" name="chairman" placeholder=""
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Confirmed Via Link -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Status Of Plan</label>
                    <input type="text" name="status_plan" placeholder=""
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                </div>

                <!-- Yet to Confirm -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Status Of Budget</label>
                    <input type="text" name="status_budget" placeholder=""
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Confirmed Via Call Center -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Workforce Capacity</label>
                    <input type="text" name="workforce_capacity" placeholder=""
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Prayer Schedule</label>
                    <input type="date" name="prayer_schedule" placeholder=""
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Meeting Schedule</label>
                    <input type="date" name="meeting_schedule" placeholder=""
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Meeting Participants</label>
                    <input type="text" name="meeting_participants" placeholder=""
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1">Key decision / Action Points</label>
                    <input type="text" name="key_decision_action_points" placeholder=""
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                 <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Next action</label>
                    <input type="text" name="next_action" placeholder=""
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                 <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Remarks</label>
                    <input type="text" name="remarks" placeholder=""
                        class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Submit Button -->
                <div class="col-span-2 flex justify-end pt-4">
                    <button type="submit"
                        class="bg-blue-950 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white py-2 px-6 rounded-lg shadow-lg transition">
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
