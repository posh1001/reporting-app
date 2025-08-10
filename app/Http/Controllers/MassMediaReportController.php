<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MassMediaReport;

class MassMediaReportController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'church' => 'nullable|string|max:255',
            'platform' => 'nullable|string|max:255',
            'total_number_in_lagos_island' => 'nullable|integer|min:0',
            'location' => 'nullable|integer|min:0',
            'total_number_in_eti_osa' => 'nullable|integer|min:0',
            'number_commissioned_in_eti_osa' => 'nullable|integer|min:0',
            'total_number_in_ibeju_lekki' => 'nullable|integer|min:0',
            'total_number_commissioned_in_ibeju_lekki' => 'nullable|integer|min:0',
            'total_number_in_epe' => 'nullable|integer|min:0',
            'total_number_commissioned_in_epe' => 'nullable|integer|min:0',
        ]);

        MassMediaReport::create($validated);

        return redirect()->back()->with('success', 'Report submitted successfully.');
    }
}
