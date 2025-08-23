<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramOrganization;


class ProgramOrganizationController extends Controller
{
    public function store(Request $request) {

       $validated = $request->validate([
    'sub_committee' => 'required|string|max:255',
    'chairman' => 'required|string|max:255',
    'status_plan' => 'required|string|max:255',
    'status_budget' => 'required|string|max:255',
    'workforce_capacity' => 'required|integer|min:0|max:100',
    'prayer_schedule' => 'required|date',
    'meeting_schedule' => 'required|date',
    'meeting_participants' => 'nullable|string|max:255',
    'key_decision_action_points' => 'nullable|string',
    'next_action' => 'nullable|string',
    'remarks' => 'nullable|string'
]);


        ProgramOrganization::create($validated);

        return back()->with('success', 'Program Organization Report Submitted Successfully');

    }
}
