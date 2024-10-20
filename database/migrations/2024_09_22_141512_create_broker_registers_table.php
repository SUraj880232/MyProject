<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('broker_register', function (Blueprint $table) {
            $table->id();
            $table->string('broker_id');
            $table->string('broker_name');
            $table->string('so_do_wo');
            $table->string('preffered_code');
            $table->date('doj'); // Date of Joining
            $table->string('gender', 10); // M or F
            $table->date('dob'); // Date of Birth
            $table->text('address');
            $table->string('pan_no');
            $table->string('phone_no');
            $table->string('driving_lic_no')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('bank_name');
            $table->string('bank_account');
            $table->string('ifsc_code');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('broker_register');
    }
};
