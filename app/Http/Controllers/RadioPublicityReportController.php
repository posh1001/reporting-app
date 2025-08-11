<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RadioPublicityReport;

class RadioPublicityReportController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'stations' => 'required|string|in:super_fm_92.7,inspiration_fm,ray_power,city_fm',
            'total_slot_required' => 'nullable|integer|min:0',
            'total_completed' => 'nullable|integer|min:0',
            'total_calls_received' => 'nullable|integer|min:0',
            'seats_reserved' => 'nullable|integer|min:0',
            'number_registered' => 'nullable|integer|min:0',
            'slots_yet_to_be_commissioned' => 'nullable|integer|min:0',
            'number_of_contact_that_have_come_to_church' => 'nullable|integer|min:0',
        ]);

        RadioPublicityReport::create($validated);

        return redirect()->back()->with('success', 'Radio Publicity Report submitted successfully!');
    }
}
