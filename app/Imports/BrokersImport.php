<?php

namespace App\Imports;

use App\Models\BrokerRegister;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;

class BrokersImport implements ToModel
{
    public function model(array $row)
    {
        \Log::info('Importing row: ', $row);

        // Handle empty broker name, assign a default value if empty
        $brokerName = !empty($row[1]) ? $row[1] : 'Unknown Broker';

        try {
            // Validate and convert Date of Joining (doj) from Excel format
            $doj = $this->validateAndConvertDate($row[4], true);

            // Validate and convert Date of Birth (dob) from Excel format
            $dob = $this->validateAndConvertDate($row[6],  true);

            return new BrokerRegister([
                'broker_id'      => $row[0],
                'broker_name'    => $brokerName,
                'so_do_wo'       => $row[2],
                'preffered_code' => $row[3],
                'doj'            => $doj,  // Valid date or default
                'gender'         => $row[5],
                'dob'            => $dob,  // Valid date or null
                'address'        => $row[7],
                'pan_no'         => $row[8],
                'phone_no'       => $row[9],
                'driving_lic_no' => $row[10],
                'passport_no'    => $row[11],
                'bank_name'      => $row[12],
                'bank_account'   => $row[13],
                'ifsc_code'      => $row[14],
            ]);
        } catch (\Exception $e) {
            \Log::error('Error importing row: ' . $e->getMessage());
            return null;  // Skip problematic row
        }
    }

    /**
     * Validate and convert Excel date to 'Y-m-d' format.
     * @param mixed $excelDate The value from the Excel row (could be numeric or empty).
     * @param bool $fallbackToNow If true, defaults to the current date if invalid.
     * @return string|null Formatted date string or null.
     */
    private function validateAndConvertDate($excelDate, $fallbackToNow = false)
    {
        // Check if the date is numeric (Excel's internal date format)
        if (is_numeric($excelDate)) {
            return Carbon::instance(Date::excelToDateTimeObject($excelDate))->format('Y-m-d');
        }

        // If date is invalid and fallback is allowed, return the current date
        if ($fallbackToNow) {
            return Carbon::now()->format('Y-m-d');
        }

        // Return null if the date is invalid and no fallback is provided
        return null;
    }

    public function chunkSize(): int
    {
        return 30000;  // Import records in batches
    }
}
