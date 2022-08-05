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
        Schema::create('consultation_hospitalisation_patient', function (Blueprint $table) {
            $table->unsignedSmallInteger('consultation_id');
            $table->unsignedMediumInteger('hospitalisation_id');
            $table->unsignedMediumInteger('patient_id');

            $table->foreign('consultation_id')->references('id')->on('consultations');
            $table->foreign('hospitalisation_id')->references('id')->on('hospitalisations');
            $table->foreign('patient_id')->references('id')->on('patients');

            $table->unsignedMediumInteger('prixUnitaireChambre');
            $table->tinyInteger('nombreDeJour');

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
        Schema::dropIfExists('consultation_hospitalisation_patient');
    }
};
