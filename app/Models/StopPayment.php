<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StopPayment extends Model
{
    use HasFactory;

    protected $fillable = ['broker_id', 'pef_code', 'name', 'remark', 'ref_no'];
}
