<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularCommission extends Model
{
    use HasFactory;

    // Define the fillable fields
    protected $fillable = [
        'so_code',
        'do',
        'so_name',
        'trainer_id',
        'reference_id',
        'name',
        'total_business',
        'one_day_cash_incentive',
        'recovery',
        'net_payable_amount',
        'tds_deduction',
        'final_amount',
        'bank_name',
        'bank_ac',
        'ifsc_code', 
        'cir_no',
        'date',
        'remarks',
        'ch_no'
    ];

    // Cast the date field
    protected $casts = [
        'date' => 'date',
    ];
}
