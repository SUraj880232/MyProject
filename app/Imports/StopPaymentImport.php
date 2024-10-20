<?php

namespace App\Imports;

use App\Models\StopPayment;
use Maatwebsite\Excel\Concerns\ToModel;

class StopPaymentImport implements ToModel
{
    public function model(array $row)
    {
        return new StopPayment([
            'broker_id' => $row[1],
            'pef_code' => $row[2],
            'name'     => $row[3],
            'remark'   => $row[4],
            'ref_no'   => $row[5],
        ]);
    }
}

