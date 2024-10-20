<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrokerRegister extends Model
{
    protected $table = 'broker_register';

    protected $fillable = [
        'broker_id','broker_name', 'so_do_wo', 'preffered_code', 'doj', 'gender',
        'dob', 'address', 'pan_no', 'phone_no', 'driving_lic_no',
        'passport_no', 'bank_name', 'bank_account', 'ifsc_code',
    ];
}
