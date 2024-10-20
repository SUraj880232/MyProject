<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('final_c_m_commissions', function (Blueprint $table) {
            $table->id();
            $table->string('mth', 255)->nullable();
            $table->string('f_year', 255)->nullable();
            $table->string('so_code', 255);
            $table->string('csc_name', 255);
            $table->string('do_name', 255);
            $table->string('reference_id', 255);
            $table->string('agt_code', 255);
            $table->string('code', 255);
            $table->string('rank', 255)->nullable();
            $table->string('name', 255);
            $table->string('vchr_no', 255);
            $table->string('created_date', 255)->nullable();
            $table->string('fat', 225)->nullable();
            $table->string('snf', 225)->nullable();
            $table->string('cm_fat', 225)->nullable();
            $table->string('cm_snf', 225)->nullable();
            $table->string('fat_rate', 225)->nullable();
            $table->string('rate', 225)->nullable();
            $table->string('quantity', 225)->nullable();
            $table->string('netamount', 225)->nullable();
            $table->string('previous_balance', 225)->nullable();
            $table->string('ri_incentive', 225)->nullable();
            $table->string('total_pay', 225)->nullable();
            $table->string('recovery_1', 225)->nullable();
            $table->string('recovery_2', 225)->nullable();
            $table->string('amount_payable', 225)->nullable();
            $table->string('tds_amount', 225)->nullable();
            $table->string('final_payable_amount', 225)->nullable();
            $table->string('vpart', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->string('account_no', 255)->nullable();
            $table->string('bank_name', 255)->nullable();
            $table->string('ifsc', 255)->nullable();
            $table->string('pan_number', 255)->nullable();
            $table->string('ref_code', 255)->nullable();
            $table->string('remark_1', 255)->nullable();
            $table->string('remark_2', 255)->nullable();
            $table->string('remark_3', 255)->nullable();
            $table->string('clearing_date', 255)->nullable();
            $table->string('cheque_issued', 255)->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('final_cm_commission');
    }
};
