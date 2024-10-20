<?php


namespace App\Models;
use App\Models\DoReport; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doreport extends Model
{
    use HasFactory;

    protected $table = 'do_reports'; // Specify the table name

    protected $fillable = [
        'csc_code',
        'csc_name',
        'do',
    ];
}
