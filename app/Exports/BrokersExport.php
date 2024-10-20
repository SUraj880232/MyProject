<?php

namespace App\Exports;
namespace App\Http\Controllers;
namespace App\Exports;

use App\Models\BrokerRegister;
use Maatwebsite\Excel\Concerns\FromCollection;

class BrokersExport implements FromCollection
{
    public function collection()
    {
        return BrokerRegister::all();
    }
}
