<?php

namespace App\Exports;

use App\Models\ChurchRegistrationReport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ChurchRegistrationReportExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return ChurchRegistrationReport::select(
            'church',
            'target_attendance',
            'confirmed_via_link',
            'confirmed_via_call_center',
            'number_of_invitees',
            'total_expected_attendance'
        )->get();
    }

    public function headings(): array
    {
        return [
            'Church',
            'Target Attendance',
            'Number Confirmed Via Registration Link',
            'Number Confirmed Via Call Center',
            'Number Of Invitees',
            'Total Expected Attendance',
        ];
    }
}
