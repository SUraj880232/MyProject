<?php

namespace App\Imports;

// use App\Models\FinalCMCommission; // Create this model
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\FinalCMCommission; // Correct namespace and class name

class FinalCMCommissionImport implements ToModel
{
    public function model(array $row)
    {
        return new FinalCMCommission([ // Correct class name
            'mth' => $row[0],
            'f_year' => $row[1],
            'so_code' => $row[2],
            'csc_name' => $row[3],
            'do_name' => $row[4],
            'reference_id' => $row[5],
            'agt_code' => $row[6],
            'code' => $row[7],
            'rank' => $row[8],
            'name' => $row[9],
            'vchr_no' => $row[10],
            'created_date' => $row[11],
            'fat' => $row[12],
            'snf' => $row[13],
            'cm_fat' => $row[14],
            'cm_snf' => $row[15],
            'fat_rate' => $row[16],
            'rate' => $row[17],
            'quantity' => $row[18],
            'netamount' => $row[19],
            'previous_balance' => $row[20],
            'ri_incentive' => $row[21],
            'total_pay' => $row[22],
            'recovery_1' => $row[23],
            'recovery_2' => $row[24],
            'amount_payable' => $row[25],
            'tds_amount' => $row[26],
            'final_payable_amount' => $row[27],
            'vpart' => $row[28],
            'status' => $row[29],
            'account_no' => $row[30],
            'bank_name' => $row[31],
            'ifsc' => $row[32],
            'pan_number' => $row[33],
            'ref_code' => $row[34],
            'remark_1' => $row[35],
            'remark_2' => $row[36],
            'remark_3' => $row[37],
            'clearing_date' => $row[38],
            'cheque_issued' => $row[39],
        ]);
    }
}
