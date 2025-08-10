<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Reports\ChurchServiceReportsController;
use Illuminate\Http\Request;
use App\Models\ChurchServiceReport;



class ChurchServiceReportController extends Controller
{
      public function create() {

        return view('reports.church-service-report');

    }

    public function store(Request $request)
    {
        $request->validate([
            'church' => 'required|string',
            'product' => 'required|string',
            'produced' => 'nullable|integer',
            'aired' => 'nullable|integer',
            'languages' => 'nullable|integer',
        ]);

        ChurchServiceReport::create($request->all());

        return redirect()->back()->with('success', 'Report submitted successfully!');
    }

    // Add other methods like show, edit, update, destroy as needed
}
