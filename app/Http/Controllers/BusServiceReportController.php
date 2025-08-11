<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusServiceReport;

class BusServiceReportController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'church' => 'required|string|max:255',
            'cell_responsible' => 'nullable|string|max:255',
            'leader_responsible' => 'nullable|string|max:255',
            'number_to_deliver' => 'required|integer|min:0',
            'catchment_name' => 'nullable|string|max:255',
        ]);

        BusServiceReport::create($validated);

        return back()->with('success', 'Bus Service Report submitted successfully.');
    }
}
