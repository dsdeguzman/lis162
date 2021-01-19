<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->string('guardian_full_name', 255);
            $table->string('guardianSex', 10);
            $table->string('guardianMobileNumber1', 12);
            $table->string('guardianMobileNumber2', 12)->nullable();
            $table->string('guardianMobileNumber3', 12)->nullable();
            $table->string('guardianTelNumber', 11)->nullable();
            $table->string('guardianEmail', 100);
            $table->string('guardianAddress', 250);
            $table->string('guardianRelType', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guardians');
    }
}
