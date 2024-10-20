<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmCalculationsTable extends Migration
{
    public function up()
    {
        Schema::create('cm_calculations', function (Blueprint $table) {
            $table->id();
            $table->decimal('fat_rate', 10, 2);
            $table->decimal('rate', 10, 2);
            $table->decimal('quantity', 10, 2);
            $table->decimal('NETAMOUNT', 10, 2);
            $table->decimal('PREVIOUS_BALANCE', 10, 2);
            $table->decimal('RI_Incentive', 10, 2);
            $table->decimal('TOTAL_PAY', 10, 2);
            $table->decimal('Recovery_1', 10, 2);
            $table->decimal('Recovery_2', 10, 2);
            $table->decimal('Amount_Payable', 10, 2);
            $table->decimal('TDS_Amount', 10, 2);
            $table->decimal('Final_Payable_Amount', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cm_calculations');
    }
}
