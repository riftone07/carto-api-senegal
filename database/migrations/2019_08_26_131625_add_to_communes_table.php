<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToCommunesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('communes', function (Blueprint $table) {
      $table->string('site_web', 100)->nullable();
      $table->string('email', 100)->nullable();
      $table->string('description', 100)->nullable();

    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('communes', function (Blueprint $table) {
      $table->dropColumn('site_web');
      $table->dropColumn('email');
      $table->dropColumn('description');

    });
  }
}
