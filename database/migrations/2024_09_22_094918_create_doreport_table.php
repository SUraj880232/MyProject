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
        Schema::create('do_reports', function (Blueprint $table) {
            $table->id();
            $table->string('csc_code')->nullable(); // Allow null values
            $table->string('csc_name')->nullable();
            $table->string('do')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('do_reports');
    }
    

};
