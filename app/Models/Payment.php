<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'MTH',
        'FYEAR',
        'socode',
        'csc_name',
        'DO_NAME',
        'referenceid',
        'AGTCODE',
        'code',
        'Rank',
        'AGTNAME',
        'VCHRNO',
        'createddate',
        'fat',
        'snf',
        'cm_fat',
        'cm_snf',
        'fat_rate',
        'rate',
        'quantity',
        'NETAMOUNT',
        'PREVIOUS_BALANCE',
        'RI_Incentive',
        'TOTAL_PAY',
        'Recovery_1',
        'Recovery_2',
        'Amount_Payable',
        'TDS_Amount',
        'Final_Payable_Amount',
        'vPart',
        'status',
        'accountno',
        'bank',
        'ifsc',
        'pan',
    ];
}
