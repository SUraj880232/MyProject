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
        Schema::create('bmcommissions', function (Blueprint $table) {
            $table->id();
            $table->integer('MTH');
            $table->integer('FYEAR');
            $table->string('SO_Code')->nullable();
            $table->string('SO_Name')->nullable();
            $table->string('DO_Name')->nullable();
            $table->string('Reference_ID')->nullable();
            $table->string('Trainer_ID')->nullable();
            $table->string('Code')->nullable();
            $table->integer('RANK')->nullable();
            $table->string('TRAINER_NAME')->nullable();
            $table->string('VCHRNO')->nullable();
            $table->decimal('FAT', 5, 2)->nullable();
            $table->decimal('SNF', 5, 2);
            $table->decimal('fat_rate', 5, 2)->nullable();
            $table->decimal('RATE', 10, 2);
            $table->integer('Quantity');
            $table->decimal('NETAMOUNT', 15, 2);
            $table->decimal('PREV_BALANCE', 15, 2)->nullable();
            $table->decimal('TOTAL_PAY', 15, 2);
            $table->decimal('Recover_1', 15, 2)->nullable();
            $table->decimal('Recovery_2', 15, 2)->nullable();
            $table->decimal('Paid_From_SO', 15, 2)->nullable();
            $table->decimal('Payable_Amount', 15, 2);
            $table->decimal('TDS_Amount', 15, 2)->nullable();
            $table->decimal('ADV_PAID', 15, 2)->nullable();
            $table->decimal('Final_Amount_Payable', 15, 2);
            $table->string('BANK_AC_NO')->nullable();
            $table->string('BANK_NAME')->nullable();
            $table->string('IFSC')->nullable();
            $table->string('PAN')->nullable();
            $table->string('Remark_1')->nullable();
            $table->string('Remark_2')->nullable();
            $table->string('CLEARING_DATE')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bm_commission');
    }
};
