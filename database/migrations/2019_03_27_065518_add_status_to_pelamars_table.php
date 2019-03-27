<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToPelamarsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('pelamars', function (Blueprint $table) {
      $table->tinyInteger('status')->default(0)->after('file_pdf');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('pelamars', function (Blueprint $table) {
      $table->dropColumn('status');
    });
  }
}
