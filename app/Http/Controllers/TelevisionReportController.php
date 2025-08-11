<?php

namespace App\Http\Controllers;

use App\Models\TelevisionReport;
use Illuminate\Http\Request;

class TelevisionReportController extends Controller
{
    public function store(Request $request)
    {
                // dd($request->all());

        $validated = $request->validate([
            'tv' => 'required|string|max:255',
            'total_slot_required' => 'required|integer|min:0',
            'total_podcast_required' => 'required|integer|min:0',
            'total_slots_done' => 'required|integer|min:0',
            'total_slots_yet_to_be_commissioned' => 'required|integer|min:0',
            'resources_required' => 'required|integer|min:0',
            'number_of_contact_that_have_come_to_church' => 'required|integer|min:0',
        ]);

        TelevisionReport::create([
            'tv_station' => $validated['tv'],
            'total_slot_required' => $validated['total_slot_required'],
            'total_podcast_required' => $validated['total_podcast_required'],
            'total_slots_done' => $validated['total_slots_done'],
            'total_slots_yet_to_be_commissioned' => $validated['total_slots_yet_to_be_commissioned'],
            'resources_required' => $validated['resources_required'],
        ]);

        return redirect()->back()->with('success', 'Television report submitted successfully!');
    }
}
