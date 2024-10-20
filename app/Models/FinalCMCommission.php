<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalCMCommission extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'final_c_m_commissions';

    // Define the fillable attributes that can be mass assigned
    protected $fillable = [
        'mth',
        'f_year',
        'so_code',
        'csc_name',
        'do_name',
        'reference_id',
        'agt_code',
        'code',
        'rank',
        'name',
        'vchr_no',
        'created_date',
        'fat',
        'snf',
        'cm_fat',
        'cm_snf',
        'fat_rate',
        'rate',
        'quantity',
        'netamount',
        'previous_balance',
        'ri_incentive',
        'total_pay',
        'recovery_1',
        'recovery_2',
        'amount_payable',
        'tds_amount',
        'final_payable_amount',
        'vpart',
        'status',
        'account_no',
        'bank_name',
        'ifsc',
        'pan_number',
        'ref_code',
        'remark_1',
        'remark_2',
        'remark_3',
        'clearing_date',
        'cheque_issued',
    ];
}
