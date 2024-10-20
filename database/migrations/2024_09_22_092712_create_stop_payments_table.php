<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Creating the stop_payments table
        Schema::create('stop_payments', function (Blueprint $table) {
            $table->id('s_no'); // Primary key with auto-increment
            $table->string('broker_id', 50)->nullable(); // Broker ID with a maximum length
            $table->string('pef_code', 50); // PEF code with a maximum length
            $table->string('name', 100); // Name with a maximum length
            $table->string('remark')->nullable(); // Optional remark
            $table->string('ref_no')->nullable(); // Optional reference number
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stop_payments');
    }
};
