<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elus', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('prenom', 100);
            $table->string('nom', 100);
            $table->string('photo', 100);
            $table->string('statut', 100);
            $table->integer('commune_id');
            $table->string('commune', 100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elus');
    }
}
