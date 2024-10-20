<?php

namespace App\Imports;

use App\Models\DoReport;
use Maatwebsite\Excel\Concerns\ToModel;

class DoReportImport implements ToModel
{
    public function model(array $row)
    {
        // Add validation logic here if necessary
        if (empty($row[0]) || empty($row[1]) || empty($row[2])) {
            // Handle missing data, e.g., log or throw an exception
            return null; // Skip this row
        }
    
        return new DoReport([
            'csc_code' => $row[0],
            'csc_name' => $row[1],
            'do' => $row[2],
        ]);
    }
    
}

