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
       

        Schema::create('employe', function (Blueprint $table) {
            $table->id(); // Colonne ID auto-incrémentée
            $table->string('nom');
            $table->string('situation_matrimoniale');
            $table->date('date_naissance');
            $table->string('adresse');
            $table->string('telephone');
            $table->date('date_recrutement');
            $table->string('email')->unique();
            $table->date('date_affectation')->nullable();
            $table->string('nom_personne_urgence');
            $table->string('telephone_urgence');
            $table->string('fonction');
            $table->string('commission');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
