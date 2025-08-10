<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;

use App\Exports\TransitMediaReportExport;
use Maatwebsite\Excel\Facades\Excel;

class TransitMediaReportExport implements FromCollection, WithHeadings
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
            'Group',
            'Mode',
            'Total Number In Lagos Island',
            'Location',
            'Total Number In Eti-Osa LGA',
            'Total Number Commissioned In Eti-Osa',
            'Total Number In Ibeju-Lekki LGA',
            'Total Number Commissioned In Ibeju-Lekki',
            'Total Number In Epe LGA',
            'Total Number Commissioned In Epe',
        ];

            return Excel::download(new TransitMediaReportExport($data), 'transit-media-report.xlsx');

    }
}
