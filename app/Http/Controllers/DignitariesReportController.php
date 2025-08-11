<?php

// app/Http/Controllers/DignitariesReportController.php

namespace App\Http\Controllers;

use App\Models\DignitariesReport;
use Illuminate\Http\Request;

class DignitariesReportController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'church' => 'required|string|max:255',
            'dignitaries_invited_today' => 'nullable|integer|min:0',
            'number_confirmed_to_attend' => 'nullable|integer|min:0',
            'gift_distributed_today' => 'nullable|string|max:255',
        ]);

        DignitariesReport::create($validated);

        return redirect()->back()->with('success', 'Dignitaries Report submitted successfully!');
    }
}

