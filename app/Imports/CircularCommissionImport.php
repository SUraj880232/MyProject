<?php 
namespace App\Imports;

use App\Models\CircularCommission;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class CircularCommissionImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $totalBusiness = is_numeric($row['total_business']) ? (float)$row['total_business'] : 0;
        $date = isset($row['date']) && is_numeric($row['date']) ? Date::excelToDateTimeObject($row['date'])->format('Y-m-d') : null;

        return new CircularCommission([
            'so_code' => $row['so_code'],
            'do' => $row['do'],
            'so_name' => $row['so_name'],
            'trainer_id' => $row['trainer_id'],
            'reference_id' => $row['reference_id'],
            'name' => $row['name'],
            'total_business' => $totalBusiness,
            'one_day_cash_incentive' => $row['one_day_cash_incentive'],
            'recovery' => $row['recovery'],
            'net_payable_amount' => $row['net_payable_amount'],
            'tds_deduction' => $row['tds_deduction'],
            'final_amount' => $row['final_amount'],
            'bank_name' => $row['bank_name'],
            'bank_ac' => $row['bank_ac'],
            'ifsc_code' => $row['ifsc_code'],
            'cir_no' => $row['cir_no'],
            'date' => $date,
            'remarks' => $row['remarks'],
            'ch_no' => $row['ch_no'],
        ]);
    }
}
