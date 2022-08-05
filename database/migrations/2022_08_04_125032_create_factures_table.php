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
        Schema::create('factures', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('nomPrenom');
            $table->string('numeroDossier')->nullable();
            $table->string('matricule')->nullable();
            $table->string('objet');

            $table->mediumInteger('consultation')->nullable();
            $table->mediumInteger('sejour')->nullable();
            $table->mediumInteger('ami')->nullable();
            $table->mediumInteger('pharmacie')->nullable();
            $table->mediumInteger('examinBiologique')->nullable();
            $table->mediumInteger('pocheDeSang')->nullable();
            $table->mediumInteger('acteDeTransfusion')->nullable();

            $table->mediumInteger('montantTotal');
            $table->mediumInteger('aavancePayee')->nullable();
            $table->mediumInteger('resteAPayer')->nullable();
            $table->mediumInteger('netAPayer');

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
        Schema::dropIfExists('factures');
    }
};
