<?php

namespace App\Imports;

use App\Models\Payment;
use Maatwebsite\Excel\Concerns\ToModel;

class PaymentsImport implements ToModel
{
    public function model(array $row)
    {
        // Ensure TOTAL_PAY is a float
        $totalPay = (float)$row[22]; // Convert to float

        // Calculate TDS (Assume TDS = 10% of TOTAL_PAY for demonstration)
        $TDS_Amount = $totalPay * 0.10; // Assuming 10% TDS

        // Calculate Final_Payable_Amount = TOTAL_PAY - TDS_Amount
        $Final_Payable_Amount = $totalPay - $TDS_Amount;

        // IFSC Code validation (Pattern for Indian IFSC code)
        $ifscPattern = '/^[A-Z]{4}0[A-Z0-9]{6}$/';
        if (!preg_match($ifscPattern, $row[32])) {
            // Invalid IFSC code, return null or handle the error
            return null; // Skip this record or log it as an error
        }

        return new Payment([
            'MTH'                   => $row[0],
            'FYEAR'                 => $row[1],
            'socode'                => $row[2],
            'csc_name'              => $row[3],
            'DO_NAME'               => $row[4],
            'referenceid'           => $row[5],
            'AGTCODE'               => $row[6],
            'code'                  => $row[7],
            'Rank'                  => $row[8],
            'AGTNAME'               => $row[9],
            'VCHRNO'                => $row[10],
            'createddate'           => $row[11],
            'fat'                   => (float)$row[12], // Convert to float
            'snf'                   => (float)$row[13], // Convert to float
            'cm_fat'                => (float)$row[14], // Convert to float
            'cm_snf'                => (float)$row[15], // Convert to float
            'fat_rate'              => (float)$row[16], // Convert to float
            'rate'                  => (float)$row[17], // Convert to float
            'quantity'              => (float)$row[18], // Convert to float
            'NETAMOUNT'             => (float)$row[19], // Convert to float
            'PREVIOUS_BALANCE'      => (float)$row[20], // Convert to float
            'RI_Incentive'          => (float)$row[21], // Convert to float
            'TOTAL_PAY'             => $totalPay, // Already converted to float
            'Recovery_1'            => (float)$row[23], // Convert to float
            'Recovery_2'            => (float)$row[24], // Convert to float
            'Amount_Payable'        => (float)$row[25], // Convert to float
            'TDS_Amount'            => $TDS_Amount, // Calculated TDS Amount
            'Final_Payable_Amount'  => $Final_Payable_Amount, // Calculated Final Payable Amount
            'vPart'                 => $row[28],
            'status'                => $row[29],
            'accountno'             => $row[30],
            'bank'                  => $row[31],
            'ifsc'                  => $row[32], // IFSC (already validated)
            'pan'                   => $row[33],
        ]);
    }
}
