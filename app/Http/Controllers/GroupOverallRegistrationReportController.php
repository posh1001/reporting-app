<?php

namespace App\Http\Controllers;

use App\Models\GroupOverallRegistrationReport;
use Illuminate\Http\Request;


class GroupOverallRegistrationReportController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'group' => 'required|string|in:CELZ5,Lekki Group,Lekki Phase 1,Chevron Group,VI Group,Ikoyi 1 Subgroup,Ikoyi 2 Subgroup,Lagos Island Group,Mobile Road Group,Ajiwe Group,Ajah Group,Tedo Group,Abijo Group,Kajola Group,Lekki Free Trade Zone Group,Epe Group,Teens Group,Youth Group,Owode/Badore Group,Alasia Group,Onishon Group,Eputu Group,Obalende Group,Ogombo Group',
            'attendance_target' => 'nullable|integer|min:0',
            'confirmed_via_link' => 'nullable|integer|min:0',
            'yet_to_confirm' => 'nullable|integer|min:0',
            'yet_to_be_invited' => 'nullable|integer|min:0',
            'expecting_healing' => 'nullable|integer|min:0',
            'expected_attendance' => 'nullable|integer|min:0',
        ]);

        GroupOverallRegistrationReport::create($validated);

        return redirect()->back()->with('success', 'Report submitted successfully!');
    }
}
