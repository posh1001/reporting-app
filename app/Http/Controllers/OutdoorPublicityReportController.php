<?php

// app/Http/Controllers/OutdoorPublicityReportController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OutdoorPublicityReport;

class OutdoorPublicityReportController extends Controller
{
    public function store(Request $request)
    {


        // dd($request->all());
        $validated = $request->validate([
            'group' => 'required|string|in:CELZ5,Lekki Group,Lekki Phase 1,Chevron Group,VI Group,Ikoyi 1 Subgroup,Ikoyi 2 Subgroup,Lagos Island Group,Mobile Road Group,Ajiwe Group,Ajah Group,Tedo Group,Abijo Group,Kajola Group,Lekki Free Trade Zone Group,Epe Group,Teens Group,Youth Group,Owode/Badore Group,Alasia Group,Onishon Group,Eputu Group,Obalende Group,Ogombo Group',
            'church' => 'nullable|string|max:255',
              'lga' => 'nullable|string|max:255',
            'number_of_ward' => 'nullable|integer|min:0',
            'number_of_street' => 'nullable|integer|min:0',
            'number_of_busstop_placed' => 'nullable|integer|min:0',
            'number_of_homes_placed' => 'nullable|integer|min:0',
            'number_of_business_placed' => 'nullable|integer|min:0',
        ]);

        OutdoorPublicityReport::create($validated);

        return redirect()->back()->with('success', 'Outdoor Publicity Report submitted successfully!');
    }
}
