<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChurchServiceReport;

class ChurchServiceReportController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'church' => 'required|string|max:255',
            'product' => 'required|string|max:255',
            'produced' => 'nullable|integer|min:0',
            'aired' => 'nullable|integer|min:0',
            'languages' => 'nullable|integer|min:0',
        ]);

        ChurchServiceReport::create($validated);

        return redirect()->back()->with('success', 'Church service report submitted successfully!');
    }
}

