<?php

namespace App\Http\Controllers;


use App\Models\EvangelismSquadReport;
use Illuminate\Http\Request;

class EvangelismSquadReportController extends Controller
{
    public function store(Request $request)
    {


        $validated = $request->validate([
            'location' => 'required|string|max:255',
            'number_led_to_christ' => 'nullable|integer|min:0',
            'number_confirmed_for_attendance' => 'nullable|integer|min:0',
            'data_collated' => 'nullable|integer|min:0',
            'testimonies' => 'nullable|integer|min:0',
        ]);

        //  dd($validated);

        EvangelismSquadReport::create($validated);

        return back()->with('success', 'Evangelism Squad Report submitted successfully!');
    }
}

