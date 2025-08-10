<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmsReport;

class SmsReportController extends Controller
{
  public function store(Request $request)
{
    $validated = $request->validate([
        'group' => 'required|string|in:CELZ5,Lekki Group,Lekki Phase 1,Chevron Group,VI Group,Ikoyi 1 Subgroup,Ikoyi 2 Subgroup,Lagos Island Group,Mobile Road Group,Ajiwe Group,Ajah Group,Tedo Group,Abijo Group,Kajola Group,Lekki Free Trade Zone Group,Epe Group,Teens Group,Youth Group,Owode/Badore Group,Alasia Group,Onishon Group,Eputu Group,Obalende Group,Ogombo Group',
        'church' => 'required|string|max:255',
        'Type_of_Sms' => 'required|in:Registration,Prayer Request,Unspecified',
        'Number_As_At_Today' => 'required|integer|min:0',
    ]);

    SmsReport::create($validated);

    return redirect()->back()->with('success', 'SMS report submitted successfully!');
}
}

