<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('departement_name', 100);
            $table->integer('region_id')->nullable();
            $table->string('region')->nullable();
            $table->string('carte', 100)->nullable();
            $table->string('latitude', 50)->nullable();
            $table->string('longitude', 50)->nullable();

            $table->string('superficie',50)->nullable();
            $table->integer('population')->nullable();
            $table->integer('population_masculine')->nullable();
            $table->integer('population_feminine')->nullable();
            $table->string('incidence_de_pauvrete',50)->nullable();
            $table->string('taux_alphabetisation',50)->nullable();
            $table->string('taux_scolarisarion',50)->nullable();
            $table->string('taux_etat_civil',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departements');
    }
}
