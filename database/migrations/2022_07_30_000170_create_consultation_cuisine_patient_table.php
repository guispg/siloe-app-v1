<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation_cuisine_patient', function (Blueprint $table) {
            $table->unsignedSmallInteger('consultation_id');
            $table->unsignedTinyInteger('cuisine_id');
            $table->unsignedMediumInteger('patient_id');

            $table->foreign('consultation_id')->references('id')->on('consultations');
            $table->foreign('cuisine_id')->references('id')->on('cuisines');
            $table->foreign('patient_id')->references('id')->on('patients');

            $table->unsignedMediumInteger('montantServiceCuisine');

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
        Schema::dropIfExists('consultation_cuisine_patient');
    }
};
