    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ([['title' => 'Total SMS Registration', 'value' => '1,245', 'color' => 'indigo', 'icon' => 'message-square'], ['title' => 'Total Internal Registration', 'value' => '34,500', 'color' => 'emerald', 'icon' => 'file-text'], ['title' => 'Total Number Of Invitees', 'value' => '582', 'color' => 'yellow', 'icon' => 'users'], ['title' => 'Total Number Of Radio Invitees', 'value' => '8,954', 'color' => 'pink', 'icon' => 'radio']] as $stat)
                        <div
                            class="bg-white rounded-xl p-6 shadow hover:shadow-lg transition transform hover:-translate-y-1">
                            <div class="flex items-start justify-between gap-4">
                                <div class="flex-1">
                                    <div class="text-sm text-gray-500 break-words leading-snug">{{ $stat['title'] }}
                                    </div>
                                    <div class="text-2xl font-bold text-{{ $stat['color'] }}-600 mt-1">
                                        {{ $stat['value'] }}</div>
                                </div>
                                <i data-feather="{{ $stat['icon'] }}"
                                    class="text-{{ $stat['color'] }}-400 w-6 h-6 mt-1"></i>
                            </div>
                        </div>
                    @endforeach

                </div>
