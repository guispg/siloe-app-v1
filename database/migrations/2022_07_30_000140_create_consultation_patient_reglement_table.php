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
        Schema::create('consultation_patient_reglement', function (Blueprint $table) {
            $table->unsignedSmallInteger('consultation_id');
            $table->unsignedMediumInteger('patient_id');
            $table->unsignedMediumInteger('reglement_id');

            $table->foreign('consultation_id')->references('id')->on('consultations');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('reglement_id')->references('id')->on('reglements');

            $table->unsignedMediumInteger('montantFactureConsultation');

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
        Schema::dropIfExists('consultation_patient_reglement');
    }
};
