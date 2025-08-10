<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CallCenterReport;

class CallCenterReportController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'church' => 'required|string|max:255',
            'database_type' => 'required|string|mmax:225',
            'number_confirmed_today' => 'required|integer|min:0',
            'number_yet_to_confirm' => 'required|integer|min:0',
            'number_expecting_healing' => 'required|integer|min:0',
            'location_coming_from' => 'required|string|max:255',
        ]);

        CallCenterReport::create($validated);

        return back()->with('success', 'Call Center Report submitted successfully.');
    }
}
