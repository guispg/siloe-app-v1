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
        Schema::create('patients', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('codePatient');
            $table->string('nomPrenom');
            $table->date('dateDeNaissance')->nullable() ;
            $table->string('profession')->nullable();
            $table->string('domicile');
            $table->string('telPatient')->nullable();
            $table->string('groupeSanguin');
            $table->string('religion');
            $table->string('ethnie');
            $table->string('nomDuProche')->nullable();
            $table->string('telDuProche')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
