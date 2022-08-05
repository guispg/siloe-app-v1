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
        Schema::create('consultation_patient_specialite', function (Blueprint $table) {
            $table->unsignedSmallInteger('consultation_id');
            $table->unsignedMediumInteger('patient_id');
            $table->unsignedMediumInteger('specialite_id');

            $table->foreign('consultation_id')->references('id')->on('consultations');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('specialite_id')->references('id')->on('specialites');

            $table->unsignedMediumInteger('montantSpecialite');

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
        Schema::dropIfExists('consultation_patient_specialite');
    }
};
