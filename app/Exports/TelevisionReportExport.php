<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TelevisionReportExport implements FromCollection, WithHeadings
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return collect($this->data);
    }

    public function headings(): array
    {
        return [
            'TV Station',
            'Available Slots',
            'Total Slot Required',
            'Total Slot Done',
            'Total Yet To Be Commissioned',
            'Resources Required',
        ];
    }
}
