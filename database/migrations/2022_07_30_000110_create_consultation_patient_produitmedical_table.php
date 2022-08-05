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
        Schema::create('consultation_patient_produitmedical', function (Blueprint $table) {
            $table->unsignedMediumInteger('consultation_id');
            $table->unsignedMediumInteger('patient_id');
            $table->unsignedSmallInteger('nomProduitMedical_id');

            $table->foreign('consultation_id')->references('id')->on('consultations');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('nomProduitMedical_id')->references('id')->on('nomProduitMedicals');

            $table->unsignedMediumInteger('prixUnitaire');
            //$table->decimal('prixUnitaire', $precision = 6, $scale = 2);

            $table->tinyInteger('quantite');

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
        Schema::dropIfExists('patient_produitmedical');
    }
};
