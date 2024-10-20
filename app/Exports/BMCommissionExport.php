<?php

namespace App\Exports;

use App\Models\BMCommission;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BMCommissionExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return BMCommission::all();
    }

    public function headings(): array
    {
        return [
            'MTH', 'FYEAR', 'SO_Code', 'SO_Name', 'DO_Name', 'Reference_ID', 'Trainer_ID', 'Code', 'RANK',
            'TRAINER_NAME', 'VCHRNO', 'FAT', 'SNF', 'fat_rate', 'RATE', 'Quantity', 'NETAMOUNT', 'PREV_BALANCE',
            'TOTAL_PAY', 'Recover_1', 'Recovery_2', 'Paid_From_SO', 'Payable_Amount', 'TDS_Amount', 'ADV_PAID',
            'Final_Amount_Payable', 'BANK_AC_NO', 'BANK_NAME', 'IFSC', 'PAN', 'Remark_1', 'Remark_2', 'CLEARING_DATE'
        ];
    }
}
