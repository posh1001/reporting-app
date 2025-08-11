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
            'platform' => 'nullable|string|in:led_screen,static_boards,lamp_post',
            'location' => 'nullable|string|in:lagos_island,eti-osa,epe,ibeju_lekki',
            'number_commissioned_in_eti_osa' => 'nullable|integer|min:0',
            'total_number_commissioned_in_ibeju_lekki' => 'nullable|integer|min:0',
            'total_number_commissioned_in_epe' => 'nullable|integer|min:0',
            'number_of_contact_that_have_come_to_church' => 'nullable|integer|min:0',
        ]);

        MassMediaReport::create($validated);

        return redirect()->back()->with('success', 'Mass Media Report submitted successfully.');
    }
}
