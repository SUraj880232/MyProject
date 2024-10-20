<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class CreateRecoveriesTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('recoveries', function (Blueprint $table) {
//             $table->id();
//             $table->date('date');
//             $table->decimal('per', 5, 2);
//             $table->string('remark');
//             $table->string('name');
//             $table->string('broker_id');
//             $table->string('code');
//             $table->decimal('amount', 10, 2);
//             $table->decimal('recovery_amount', 10, 2);
//             $table->decimal('balance', 10, 2);
//             $table->decimal('orc_sept_2019', 10, 2)->nullable();
//             $table->decimal('orc_oct_2019', 10, 2)->nullable();
//             $table->decimal('brok_nov_2019', 10, 2)->nullable();
//             $table->decimal('orc_nov_2019', 10, 2)->nullable();
//             $table->decimal('orc_dec_2019', 10, 2)->nullable();
//             $table->decimal('orc_jan_2020', 10, 2)->nullable();
//             $table->decimal('orc_feb_2020', 10, 2)->nullable();
//             $table->decimal('orc_march_20', 10, 2)->nullable();
//             $table->decimal('brk_june_20', 10, 2)->nullable();
//             $table->decimal('orc_may_2020', 10, 2)->nullable();
//             $table->decimal('orc_june_20', 10, 2)->nullable();
//             $table->decimal('orc_july_20', 10, 2)->nullable();
//             $table->decimal('brk_aug_20', 10, 2)->nullable();
//             $table->decimal('orc_aug_20', 10, 2)->nullable();
//             $table->decimal('orc_sept_20', 10, 2)->nullable();
//             $table->decimal('brk_oct_20', 10, 2)->nullable();
//             $table->decimal('orc_oct_20', 10, 2)->nullable();
//             $table->decimal('brk_nov_20', 10, 2)->nullable();
//             $table->decimal('orc_nov_20', 10, 2)->nullable();
//             $table->decimal('brk_other_dec_20', 10, 2)->nullable();
//             $table->decimal('orc_other_dec_20', 10, 2)->nullable();
//             $table->decimal('01_12_2020', 10, 2)->nullable();
//             $table->decimal('brk_jan_21', 10, 2)->nullable();
//             $table->decimal('brk_feb_21', 10, 2)->nullable();
//             $table->decimal('orc_jan_21', 10, 2)->nullable();
//             $table->decimal('orc_feb_21', 10, 2)->nullable();
//             $table->decimal('orc_march_21', 10, 2)->nullable();
//             $table->decimal('april_21_brk', 10, 2)->nullable();
//             $table->decimal('april_21_orc', 10, 2)->nullable();
//             $table->decimal('may_21_orc', 10, 2)->nullable();
//             $table->decimal('june_21_orc', 10, 2)->nullable();
//             $table->decimal('july_21_brk', 10, 2)->nullable();
//             $table->decimal('july_21_orc', 10, 2)->nullable();
//             $table->decimal('aug_21_brk', 10, 2)->nullable();
//             $table->decimal('aug_21_orc', 10, 2)->nullable();
//             $table->decimal('sept_21_brk', 10, 2)->nullable();
//             $table->decimal('sept_21_orc', 10, 2)->nullable();
//             $table->decimal('pr_incentive', 10, 2)->nullable();
//             $table->decimal('oct_21_cm', 10, 2)->nullable();
//             $table->decimal('oct_21_bm', 10, 2)->nullable();
//             $table->decimal('cir_no_82_91', 10, 2)->nullable();
//             $table->decimal('bm_nov_21', 10, 2)->nullable();
//             $table->decimal('bm_dec_21', 10, 2)->nullable();
//             $table->decimal('cm_jan_22', 10, 2)->nullable();
//             $table->decimal('bm_jan_22', 10, 2)->nullable();
//             $table->decimal('cm_feb_22', 10, 2)->nullable();
//             $table->decimal('bm_feb_22', 10, 2)->nullable();
//             $table->decimal('bm_march_22', 10, 2)->nullable();
//             $table->decimal('bm_april_22', 10, 2)->nullable();
//             $table->decimal('bm_may_2022', 10, 2)->nullable();
//             $table->decimal('bm_june_2022', 10, 2)->nullable();
//             $table->decimal('opa_21_22', 10, 2)->nullable();
//             $table->decimal('bm_july_22', 10, 2)->nullable();
//             $table->decimal('bm_aug_22', 10, 2)->nullable();
//             $table->decimal('bm_sept_22', 10, 2)->nullable();
//             $table->decimal('cm_sept_22', 10, 2)->nullable();
//             $table->decimal('cm_aug_22', 10, 2)->nullable();
//             $table->decimal('cm_july_22', 10, 2)->nullable();
//             $table->decimal('bm_oct_22', 10, 2)->nullable();
//             $table->decimal('cm_oct_22', 10, 2)->nullable();
//             $table->decimal('bm_nov_22', 10, 2)->nullable();
//             $table->decimal('bm_dec_22', 10, 2)->nullable();
//             $table->decimal('bm_jan_23', 10, 2)->nullable();
//             $table->decimal('bm_feb_23', 10, 2)->nullable();
//             $table->decimal('cm_mar_23', 10, 2)->nullable();
//             $table->decimal('bm_mar_23', 10, 2)->nullable();
//             $table->decimal('cir_15_22_mar_apr_2023', 10, 2)->nullable();
//             $table->decimal('cm_apr_23', 10, 2)->nullable();
//             $table->decimal('bm_apr_23', 10, 2)->nullable();
//             $table->decimal('cm_may_23', 10, 2)->nullable();
//             $table->decimal('bm_may_23', 10, 2)->nullable();
//             $table->decimal('cm_jun_23', 10, 2)->nullable();
//             $table->decimal('bm_jun_23', 10, 2)->nullable();
//             $table->decimal('cir_52_57_jul_2023', 10, 2)->nullable();
//             $table->decimal('cm_jul_23', 10, 2)->nullable();
//             $table->decimal('bm_jul_23', 10, 2)->nullable();
//             $table->decimal('cm_aug', 10, 2)->nullable();
//             $table->decimal('bm_aug_23', 10, 2)->nullable();
//             $table->decimal('bm_sep_23', 10, 2)->nullable();
//             $table->decimal('cm_sep_23', 10, 2)->nullable();
//             $table->decimal('cir_72_2022', 10, 2)->nullable();
//             $table->decimal('club_incentive', 10, 2)->nullable();
//             $table->decimal('cm_oct_23', 10, 2)->nullable();
//             $table->decimal('bm_oct_23', 10, 2)->nullable();
//             $table->decimal('diary_bm_oct_23', 10, 2)->nullable();
//             $table->decimal('cm_nov_23', 10, 2)->nullable();
//             $table->decimal('bm_nov_23', 10, 2)->nullable();
//             $table->decimal('diary_bm_nov_23', 10, 2)->nullable();
//             $table->decimal('diary_bm_dec_23', 10, 2)->nullable();
//             $table->decimal('life_cm_dec_23', 10, 2)->nullable();
//             $table->decimal('life_bm_dec_23', 10, 2)->nullable();
//             $table->decimal('diary_bm_jan_24', 10, 2)->nullable();
//             $table->decimal('life_cm_jan_24', 10, 2)->nullable();
//             $table->decimal('life_bm_jan_24', 10, 2)->nullable();
//             $table->decimal('life_cm_feb_24', 10, 2)->nullable();
//             $table->decimal('life_bm_feb_24', 10, 2)->nullable();
//             $table->decimal('life_cm_mar_24', 10, 2)->nullable();
//             $table->decimal('life_bm_mar_24', 10, 2)->nullable();
//             $table->decimal('life_cm_apr_24', 10, 2)->nullable();
//             $table->decimal('life_bm_apr_24', 10, 2)->nullable();
//             $table->decimal('life_cm_may_24', 10, 2)->nullable();
//             $table->decimal('life_bm_may_24', 10, 2)->nullable();
//             $table->decimal('life_cm_jun_24', 10, 2)->nullable();
//             $table->decimal('life_bm_jun_24', 10, 2)->nullable();
//             $table->decimal('yearly_benef_cir_4_car_inc_2024', 10, 2)->nullable();
//             $table->decimal('yearly_benef_cir_6_2024', 10, 2)->nullable();
//             $table->decimal('life_bm_jul_24', 10, 2)->nullable();
//             $table->decimal('life_cm_aug_24', 10, 2)->nullable();
//             $table->decimal('life_bm_aug_24', 10, 2)->nullable();

//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::dropIfExists('recoveries');
//     }
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recovery extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = [
        'date',
        'per',
        'remark',
        'name',
        'broker_id',
        'code',
        'amount',
        'recovery_amount',
        'balance',
        'orc_sept_2019',
        'orc_oct_2019',
        'brok_nov_2019',
        'orc_nov_2019',
        'orc_dec_2019',
        'orc_jan_2020',
        'orc_feb_2020',
        'orc_march_20',
        'brk_june_20',
        'orc_may_2020',
        'orc_june_20',
        'orc_july_20',
        'brk_aug_20',
        'orc_aug_20',
        'orc_sept_20',
        'brk_oct_20',
        'orc_oct_20',
        'brk_nov_20',
        'orc_nov_20',
        'brk_other_dec_20',
        'orc_other_dec_20',
        '01_12_2020',
        'brk_jan_21',
        'brk_feb_21',
        'orc_jan_21',
        'orc_march_21',
        'orc_feb_21',
        'april_21_brk',
        'april_21_orc',
        'may_21_orc',
        'june_21_orc',
        'july_21_brk',
        'july_21_orc',
        'aug_21_brk',
        'aug_21_orc',
        'sept_21_brk',
        'cir_no_75_2021',
        'sept_21_orc',
        'pr_incentive',
        'oct_21_cm',
        'oct_21_bm',
        'cir_no_82_91',
        'bm_nov_21',
        'bm_dec_21',
        'cm_jan_22',
        'bm_jan_22',
        'cm_feb_22',
        'bm_feb_22',
        'bm_march_22',
        'bm_april_22',
        'bm_may_2022',
        'bm_june_2022',
        'opa_21_22',
        'bm_july_22',
        'bm_aug_22',
        'bm_sept_22',
        'cm_sept_22',
        'cm_aug_22',
        'cm_july_22',
        'bm_oct_22',
        'cm_oct_22',
        'bm_nov_22',
        'bm_dec_22',
        'bm_jan_23',
        'bm_feb_23',
        'cm_mar_23',
        'bm_mar_23',
        'cir_apr_23',
        'cm_apr_23',
        'bm_apr_23',
        'cm_may_23',
        'bm_may_23',
        'cm_jun_23',
        'bm_jun_23',
        'cir_jul_23',
        'cm_jul_23',
        'bm_jul_23',
        'cm_aug',
        'bm_aug_23',
        'bm_sep_23',
        'cm_sep_23',
        'cir_72_2022',
        'club_incentive',
        'cm_oct_23',
        'bm_oct_23',
        'diary_bm_oct_23',
        'cm_nov_23',
        'bm_nov_23',
        'diary_bm_nov_23',
        'diary_bm_dec_23',
        'life_cm_dec_23',
        'life_bm_dec_23',
        'diary_bm_jan_24',
        'life_cm_jan_24',
        'life_bm_jan_24',
        'life_cm_feb_24',
        'life_bm_feb_24',
        'life_cm_mar_24',
        'life_bm_mar_24',
        'life_cm_apr_24',
        'life_bm_apr_24',
        'life_cm_may_24',
        'life_bm_may_24',
        'life_cm_jun_24',
        'life_bm_jun_24',
        'cir_car_inc',
        'yearly_benf_cir_6',
        'life_bm_jul_24',
        'life_cm_aug_24',
        'life_bm_aug_24',

    ];
}
