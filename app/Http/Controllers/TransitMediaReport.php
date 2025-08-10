<?php

// app/Http/Controllers/TransitMediaReportController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransitMediaReport;

class TransitMediaReportController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'group' => 'required|string|in:CELZ5,Lekki Group,Lekki Phase 1,Chevron Group,VI Group,Ikoyi 1 Subgroup,Ikoyi 2 Subgroup,Lagos Island Group,Mobile Road Group,Ajiwe Group,Ajah Group,Tedo Group,Abijo Group,Kajola Group,Lekki Free Trade Zone Group,Epe Group,Teens Group,Youth Group,Owode/Badore Group,Alasia Group,Onishon Group,Eputu Group,Obalende Group,Ogombo Group',
            'group' => 'nullable|string|max:255',
            'total_number_in_lagos_island' => 'nullable|integer|min:0',
            'location' => 'nullable|integer|min:0',
            'total_number_in_eti_osa' => 'nullable|integer|min:0',
            'number_conmissioned_in_eti_osa' => 'nullable|integer|min:0',
            'total_number_in_ibeju_lekki' => 'nullable|integer|min:0',
            'total_number_commissioned_in_ibeju_lekki' => 'nullable|integer|min:0',
            'total_number_in_epe' => 'nullable|integer|min:0',
            'total_number_commissioned_in_epe' => 'nullable|integer|min:0',
        ]);

        TransitMediaReport::create($validated);

        return redirect()->back()->with('success', 'Report submitted successfully!');
    }
}
