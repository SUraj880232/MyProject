<?php

namespace App\Imports;

use App\Models\Recovery;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RecoveryImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Log the row data for debugging
        \Log::info('Row data:', $row);
        //Log::info($row);
        // Make sure to replace 'date_column_name' with the actual column heading for the date in your Excel file
        $dateColumn = 'date'; // Change this to your actual date column heading

        // Check if the date field exists
        if (!isset($row[$dateColumn])) {
            \Log::error('Date field missing in the row.');
            return null; // Skip this row or handle it as needed
        }

        // Convert the date using excelToDate if it's in numeric form, otherwise just use the value
        $date = is_numeric($row[$dateColumn]) ? $this->excelToDate($row[$dateColumn]) : $row[$dateColumn];


        return new Recovery([
            'date' => $date,
            'per' => $row['per'],
            'remark' => $row['remark'],
            'name' => $row['name'],
            'broker_id' => $row['broker_id'] ?? null,
            'code' => $row['code'],
            'amount' => $row['amount'],
            'recovery_amount' => $row['recovery_amount'],
            'balance' => $row['balance'],
            'orc_sept_2019' => $row['orc_sept_2019'],
            'orc_oct_2019' => $row['orc_oct_2019'],
            'brok_nov_2019' => $row['brok_nov_2019'],
            'orc_nov_2019' => $row['orc_nov_2019'],
            'orc_dec_2019' => $row['orc_dec_2019'],
            'orc_jan_2020' => $row['orc_jan_2020'],
            'orc_feb_2020' => $row['orc_feb_2020'],
            'orc_march_20' => $row['orc_march_20'],
            'brk_june_20' => $row['brk_june_20'],
            'orc_may_2020' => $row['orc_may_2020'],
            'orc_june_20' => $row['orc_june_20'],
            'orc_july_20' => $row['orc_july_20'],
            'brk_aug_20' => $row['brk_aug_20'],
            'orc_aug_20' => $row['orc_aug_20'],
            'orc_sept_20' => $row['orc_sept_20'],
            'brk_oct_20' => $row['brk_oct_20'],
            'orc_oct_20' => $row['orc_oct_20'],
            'brk_nov_20' => $row['brk_nov_20'],
            'orc_nov_20' => $row['orc_nov_20'],
            'brk_other_dec_20' => $row['brk_other_dec_20'],
            'orc_other_dec_20' => $row['orc_other_dec_20'],
            '01_12_2020' => $row['01_12_2020'],
            'brk_jan_21' => $row['brk_jan_21'],
            'brk_feb_21' => $row['brk_feb_21'],
            'orc_jan_21' => $row['orc_jan_21'],
            'orc_feb_21' => $row['orc_feb_21'],
            'orc_march_21' => $row['orc_march_21'],
            'april_21_brk' => $row['april_21_brk'],
            'april_21_orc' => $row['april_21_orc'],
            'may_21_orc' => $row['may_21_orc'],
            'june_21_orc' => $row['june_21_orc'],
            'july_21_brk' => $row['july_21_brk'],
            'july_21_orc' => $row['july_21_orc'],
            'aug_21_brk' => $row['aug_21_brk'],
            'aug_21_orc' => $row['aug_21_orc'],
            'sept_21_brk' => $row['sept_21_brk'],
            'sept_21_orc' => $row['sept_21_orc'],
            'pr_incentive' => $row['pr_incentive'],
            'oct_21_cm' => $row['oct_21_cm'],
            'oct_21_bm' => $row['oct_21_bm'],
            'cir_no_82_91' => $row['cir_no_82_91'],
            'bm_nov_21' => $row['bm_nov_21'],
            'bm_dec_21' => $row['bm_dec_21'],
            'cm_jan_22' => $row['cm_jan_22'],
            'bm_jan_22' => $row['bm_jan_22'],
            'cm_feb_22' => $row['cm_feb_22'],
            'bm_feb_22' => $row['bm_feb_22'],
            'bm_march_22' => $row['bm_march_22'],
            'bm_april_22' => $row['bm_april_22'],
            'bm_may_2022' => $row['bm_may_2022'],
            'bm_june_2022' => $row['bm_june_2022'],
            'opa_21_22' => $row['opa_21_22'],
            'bm_july_22' => $row['bm_july_22'],
            'bm_aug_22' => $row['bm_aug_22'],
            'bm_sept_22' => $row['bm_sept_22'],
            'cm_sept_22' => $row['cm_sept_22'],
            'cm_aug_22' => $row['cm_aug_22'],
            'cm_july_22' => $row['cm_july_22'],
            'bm_oct_22' => $row['bm_oct_22'],
            'cm_oct_22' => $row['cm_oct_22'],
            'bm_nov_22' => $row['bm_nov_22'],
            'bm_dec_22' => $row['bm_dec_22'],
            'bm_jan_23' => $row['bm_jan_23'],
            'bm_feb_23' => $row['bm_feb_23'],
            'cm_mar_23' => $row['cm_mar_23'],
            'bm_mar_23' => $row['bm_mar_23'],
            'cir_apr_23' => $row['cir_apr_23'],
            'cm_apr_23' => $row['cm_apr_23'],
            'bm_apr_23' => $row['bm_apr_23'],
            'cm_may_23' => $row['cm_may_23'],
            'bm_may_23' => $row['bm_may_23'],
            'cm_jun_23' => $row['cm_jun_23'],
            'bm_jun_23' => $row['bm_jun_23'],
            'cir_jul_23' => $row['cir_jul_23'],
            'cm_jul_23' => $row['cm_jul_23'],
            'bm_jul_23' => $row['bm_jul_23'],
            'cm_aug' => $row['cm_aug'],
            'bm_aug_23' => $row['bm_aug_23'],
            'bm_sep_23' => $row['bm_sep_23'],
            'cm_sep_23' => $row['cm_sep_23'],
            'cir_72_2022' => $row['cir_72_2022'],
            'club_incentive' => $row['club_incentive'],
            'cm_oct_23' => $row['cm_oct_23'],
            'bm_oct_23' => $row['bm_oct_23'],
            'diary_bm_oct_23' => $row['diary_bm_oct_23'],
            'cm_nov_23' => $row['cm_nov_23'],
            'bm_nov_23' => $row['bm_nov_23'],

            'diary_bm_nov_23' => $row['diary_bm_nov_23'],
            'diary_bm_dec_23' => $row['diary_bm_dec_23'],
            'life_cm_dec_23' => $row['life_cm_dec_23'],
            'life_bm_dec_23' => $row['life_bm_dec_23'],
            'diary_bm_jan_24' => $row['diary_bm_jan_24'],
            'life_cm_jan_24' => $row['life_cm_jan_24'],
            'life_bm_jan_24' => $row['life_bm_jan_24'],
            'life_cm_feb_24' => $row['life_cm_feb_24'],
            'life_bm_feb_24' => $row['life_bm_feb_24'],
            'life_cm_mar_24' => $row['life_cm_mar_24'],
            'life_bm_mar_24' => $row['life_bm_mar_24'],
            'life_cm_apr_24' => $row['life_cm_apr_24'],
            'life_bm_apr_24' => $row['life_bm_apr_24'],
            'life_cm_may_24' => $row['life_cm_may_24'],
            'life_bm_may_24' => $row['life_bm_may_24'],
            'life_cm_jun_24' => $row['life_cm_jun_24'],
            'life_bm_jun_24' => $row['life_bm_jun_24'],
            'CIR_Car_Inc' => $row['cir_car_inc'],

            'YEARLY_BENF_CIR_6' => $row['yearly_benf_cir_6'],
            'life_bm_jul_24' => $row['life_bm_jul_24'],
            'life_cm_aug_24' => $row['life_cm_aug_24'],
            'life_bm_aug_24' => $row['life_bm_aug_24']
        ]);
    }

    private function excelToDate($value)
    {
        return \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value)->format('Y-m-d');
    }
}

