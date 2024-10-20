<?php

namespace App\Exports;

use App\Models\CircularCommission;
use Maatwebsite\Excel\Concerns\FromCollection;

class CircularCommissionExport implements FromCollection
{
    public function collection()
    {
        return CircularCommission::all();
    }
}

