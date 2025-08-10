<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GroupAttendanceReportExport implements FromArray, WithHeadings
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function array(): array
    {
        return $this->data;
    }

    public function headings(): array
    {
        return [
            'Group',
            'Membership Strength',
            'Number Confirmed Today',
            'Number Yet To Confirmed',
            'Number Coming With Own Cars',
            'Number Coming With Bus',
            'Number Expecting Healing',
        ];
    }
}
