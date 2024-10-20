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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('MTH');
            $table->integer('FYEAR');
            $table->integer('socode');
            $table->string('csc_name');
            $table->string('DO_NAME');
            $table->string('referenceid');
            $table->string('AGTCODE');
            $table->string('code');
            $table->integer('Rank');
            $table->string('AGTNAME');
            $table->string('VCHRNO');
            $table->timestamp('createddate');
            $table->decimal('fat', 5, 2);
            $table->decimal('snf', 5, 2);
            $table->decimal('cm_fat', 5, 2);
            $table->decimal('cm_snf', 5, 2);
            $table->decimal('fat_rate', 5, 2);
            $table->decimal('rate', 5, 2);
            $table->decimal('quantity', 10, 2);
            $table->decimal('NETAMOUNT', 10, 2);
            $table->decimal('PREVIOUS_BALANCE', 10, 2)->nullable();
            $table->decimal('RI_Incentive', 10, 2)->nullable();
            $table->decimal('TOTAL_PAY', 10, 2);
            $table->decimal('Recovery_1', 10, 2)->nullable();
            $table->decimal('Recovery_2', 10, 2)->nullable();
            $table->decimal('Amount_Payable', 10, 2);
            $table->decimal('TDS_Amount', 10, 2)->nullable();
            $table->decimal('Final_Payable_Amount', 10, 2);
            $table->string('vPart');
            $table->string('status');
            $table->string('accountno');
            $table->string('bank');
            $table->string('ifsc');
            $table->string('pan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
