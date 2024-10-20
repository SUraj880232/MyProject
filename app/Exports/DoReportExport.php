<?php

namespace App\Exports;

use App\Models\DoReport;
use Maatwebsite\Excel\Concerns\FromCollection;


class DoReportExport implements FromCollection
{
    public function collection()
    {
        return DoReport::all();
    }
}
