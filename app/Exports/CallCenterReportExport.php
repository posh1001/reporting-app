<?php

namespace App\Exports;

use App\Models\CallCenterReport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CallCenterReportExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return CallCenterReport::select([
            'group',
            'total_outreach',
            'confirmed_today',
            'yet_to_confirm',
            'expecting_healing',
            'location'
        ])->get();
    }

    public function headings(): array
    {
        return [
            'Group',
            'Total Outreach',
            'Confirmed Today',
            'Yet To Confirm',
            'Expecting Healing',
            'Location'
        ];
    }
}
