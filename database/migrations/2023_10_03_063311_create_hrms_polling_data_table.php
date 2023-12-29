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
        Schema::create('hrms_polling_data', function (Blueprint $table) {
            $table->id();
            $table->string('HRMSCODE',60)->nullable();
            $table->string('NAME',60)->nullable();
            $table->string('FATHER_HUSBAND',60)->nullable();
            $table->string('DOB',60)->nullable();
            $table->string('DOR',60)->nullable();
            $table->string('DEPTCODE',60)->nullable();
            $table->string('OFFICECODE',60)->nullable();
            $table->string('DESIGCODE',60)->nullable();
            $table->string('GENDER',60)->nullable();
            $table->string('CLASS',60)->nullable();
            $table->string('PAYLEVEL',60)->nullable();
            $table->string('BASICPAY',60)->nullable();
            $table->string('OFFICENAME',200)->nullable();
            $table->string('DISTRICT',60)->nullable();
            $table->string('DISTCODE',60)->nullable();
            $table->string('MOBILE',60)->nullable();
            $table->string('EMAIL',60)->nullable();
            $table->string('BANKNAME',60)->nullable();
            $table->string('IFSCCODE',60)->nullable();
            $table->string('ACCOUNTNO',60)->nullable();
            $table->string('STATUS',60)->nullable();
            $table->string('EMPLOYEETYPE',60)->nullable();
            $table->string('DDO_CODE',60)->nullable();
            $table->string('IFMSPAYEECODE',60)->nullable();
            $table->string('HANDICAPPED',60)->nullable();
            $table->string('ONLEAVE',60)->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hrms_polling_data');
    }
};
