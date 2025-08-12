<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransitMediaReport;

class TransitMediaReportController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'church_group' => 'required|string|in:Zonal Office,Lekki Group,Lekki Phase 1,Chevron Group,VI Group,Ikoyi 1 Subgroup,Ikoyi 2 Subgroup,Lagos Island Group,Mobile Road Group,Ajiwe Group,Ajah Group,Tedo Group,Abijo Group,Kajola Group,Lekki Free Trade Zone Group,Epe Group,Teens Group,Youth Group,Owode/Badore Group,Alasia Group,Onishon Group,Eputu Group,Obalende Group,Ogombo Group',
            'group_transit' => 'nullable|string|max:255|in:brt_buses_stickers,brt_buses_in_drive_radio,regular_buses,7_seater_buses,tricycles',
            'location' => 'nullable|integer|min:0|in:Lagos Island,Eti-Osa,Epe,Ibeju Lekki',
            'number_conmissioned_in_eti_osa' => 'nullable|integer|min:0',
            'total_number_commissioned_in_ibeju_lekki' => 'nullable|integer|min:0',
            'total_number_commissioned_in_epe' => 'nullable|integer|min:0',
        ]);

        TransitMediaReport::create($validated);

        return redirect()->back()->with('success', 'Transit Media Report submitted successfully!');
    }
}
