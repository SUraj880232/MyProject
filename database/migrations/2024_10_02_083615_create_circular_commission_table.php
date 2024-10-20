<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCircularCommissionTable extends Migration
{
    public function up()
    {
        Schema::create('circular_commissions', function (Blueprint $table) {
            $table->id();
            $table->string('so_code')->nullable();
            $table->string('do')->nullable();
            $table->string('so_name')->nullable();
            $table->string('trainer_id')->nullable();
            $table->string('reference_id')->nullable();
            $table->string('name')->nullable();
            $table->decimal('total_business', 20, 2);
            $table->string('one_day_cash_incentive')->nullable();
            $table->string('recovery')->nullable();
            $table->string('net_payable_amount')->nullable();
            $table->string('tds_deduction')->nullable();
            $table->string('final_amount')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_ac')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('cir_no')->nullable();
            $table->date('date')->nullable();
            $table->string('remarks')->nullable();
            $table->string('ch_no')->nullable();
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('circular_commission');
    }
}

