<?php

namespace App\Http\Controllers;

use App\Models\ChurchSummaryAttendance;
use Illuminate\Http\Request;


class ChurchSummaryAttendanceController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'church' => 'required|string|max:255',
            'membership_strength' => 'nullable|integer|min:0',
            'confirmed_via_link' => 'nullable|integer|min:0',
            'yet_to_confirm' => 'nullable|integer|min:0',
            'coming_with_own_cars' => 'nullable|integer|min:0',
            'coming_with_bus' => 'nullable|integer|min:0',
            'expecting_healing' => 'nullable|integer|min:0',
        ]);

        ChurchSummaryAttendance::create($validated);

        return redirect()->back()->with('success', 'Church summary attendance Report submitted successfully!');
    }
}
