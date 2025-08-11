<?php

// app/Http/Controllers/SocialMediaReportController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMediaReport;

class SocialMediaReportController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'church_group' => 'required|string|in:Zonal Office,Lekki Group,Lekki Phase 1,Chevron Group,VI Group,Ikoyi 1 Subgroup,Ikoyi 2 Subgroup,Lagos Island Group,Mobile Road Group,Ajiwe Group,Ajah Group,Tedo Group,Abijo Group,Kajola Group,Lekki Free Trade Zone Group,Epe Group,Teens Group,Youth Group,Owode/Badore Group,Alasia Group,Onishon Group,Eputu Group,Obalende Group,Ogombo Group',
            'social_media' => 'nullable|string|max:255',
            'total_estimated_reach' => 'nullable|integer|min:0',
            'engagement' => 'nullable|integer|min:0',
            'conversion' => 'nullable|integer|min:0',
        ]);

        SocialMediaReport::create($validated);

        return redirect()->back()->with('success', 'Social Media Report submitted successfully!');
    }
}

