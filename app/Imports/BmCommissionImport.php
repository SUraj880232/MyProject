<?php

namespace App\Imports;

use App\Models\BMCommission;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BMCommissionImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {



        
        return new BMCommission([
            'MTH' => $row['mth'],
            'FYEAR' => $row['fyear'],
            'SO_Code' => $row['so_code'],
            'SO_Name' => $row['so_name'],
            'DO_Name' => $row['do_name'],
            'Reference_ID' => $row['reference_id'],
            'Trainer_ID' => $row['trainer_id'],
            'Code' => $row['code'],
            'RANK' => $row['rank'],
            'TRAINER_NAME' => $row['trainer_name'],
            'VCHRNO' => $row['vchrno'],
            'FAT' => $row['fat'],
            'SNF' => $row['snf'],
            'fat_rate' => $row['fat_rate'],
            'RATE' => $row['rate'],
            'Quantity' => $row['quantity'],
            'NETAMOUNT' => $row['netamount'],
            'PREV_BALANCE' => $row['prev_balance'],
            'TOTAL_PAY' => $row['total_pay'],
            'Recover_1' => $row['recover_1'],
            'Recovery_2' => $row['recovery_2'],
            'Paid_From_SO' => $row['paid_from_so'],
            'Payable_Amount' => $row['payable_amount'],
            'TDS_Amount' => $row['tds_amount'],
            'ADV_PAID' => $row['adv_paid'],
            'Final_Amount_Payable' => $row['final_amount_payable'],
            'BANK_AC_NO' => $row['bank_ac_no'],
            'BANK_NAME' => $row['bank_name'],
            'IFSC' => $row['ifsc'],
            'PAN' => $row['pan'],
            'Remark_1' => $row['remark_1'],
            'Remark_2' => $row['remark_2'],
            'CLEARING_DATE' => $row['clearing_date'],
        ]);
    }
}
