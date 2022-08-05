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
        Schema::create('actemedical_consultation_medecin_patient', function (Blueprint $table) {
            $table->unsignedSmallInteger('medecin_id');
            $table->unsignedMediumInteger('consultation_id');
            $table->unsignedMediumInteger('patient_id');
            $table->unsignedMediumInteger('actemedical_id');

            $table->foreign('medecin_id')->references('id')->on('medecins');
            $table->foreign('consultation_id')->references('id')->on('consultations');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('actemedical_id')->references('id')->on('actemedicals');

            $table->unsignedMediumInteger('prixConsultation');
            //$table->decimal('prixConsultation', $precision=8, $scale=2);

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
        Schema::dropIfExists('medecin_patient');
    }
};
