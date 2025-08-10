<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\WithHeadings;

class MassMediaReportExport implements FromCollection, WithHeadings
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
            'Platform',
            'Total Number In Lagos Island',
            'Location',
            'Total Number In Eti-Osa LGA',
            'Total Number Commissioned In Eti-Osa',
            'Total Number In Ibeju-Lekki LGA',
            'Total Number Commissioned In Ibeju-Lekki',
            'Total Number In Epe LGA',
            'Total Number Commissioned In Epe',
        ];
    }
}
