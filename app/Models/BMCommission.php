<?php

namespace App\Models;
use App\Models\BMCommission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BMCommission extends Model
{
    use HasFactory;

    // Optional: Define the table name if it does not follow Laravel's conventions
    protected $table = 'bmcommissions'; // Uncomment and adjust if necessary

    // Optional: Define the primary key if it's not 'id'
    // protected $primaryKey = 'your_primary_key'; // Uncomment and adjust if necessary

    // Specify the fields that can be mass assigned
    protected $fillable = [
        'MTH', 'FYEAR', 'SO_Code', 'SO_Name', 'DO_Name', 'Reference_ID', 'Trainer_ID', 'Code', 'RANK',
        'TRAINER_NAME', 'VCHRNO', 'FAT', 'SNF', 'fat_rate', 'RATE', 'Quantity', 'NETAMOUNT', 'PREV_BALANCE',
        'TOTAL_PAY', 'Recover_1', 'Recovery_2', 'Paid_From_SO', 'Payable_Amount', 'TDS_Amount', 'ADV_PAID',
        'Final_Amount_Payable', 'BANK_AC_NO', 'BANK_NAME', 'IFSC', 'PAN', 'Remark_1', 'Remark_2', 'CLEARING_DATE'
    ];
}
