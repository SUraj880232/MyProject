<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\StopPayment; // Import your model if necessary

class StopPaymentExport implements FromCollection
{
    public function collection()
    {
        return StopPayment::all(); // Adjust to your needs
    }
}
