<?php

namespace App\Http\Controllers;

use App\Models\ChurchRegistrationReport;
use Illuminate\Http\Request;

class ChurchRegistrationReportController extends Controller
{
    public function store(Request $request)
    {

        // dd($request->all());

        $validated = $request->validate([
            'church' => 'required|string|max:255',
            'attendance_target' => 'nullable|integer',
            'confirmed_via_link' => 'nullable|integer',
            'yet_to_confirm' => 'nullable|integer',
            'confirmed_via_call_center' => 'nullable|integer',
            'invitees' => 'nullable|integer',
            'expected_attendance' => 'nullable|integer',
        ]);

        ChurchRegistrationReport::create($validated);

        return redirect()->back()->with('success', 'Cell Ministry Invitee Report submitted successfully.');
    }
}
