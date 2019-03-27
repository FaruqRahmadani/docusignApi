<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelamarsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('pelamars', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nama');
      $table->tinyInteger('jenis_kelamin');
      $table->string('email');
      $table->string('no_telepon');
      $table->string('file_pdf');
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
    Schema::dropIfExists('pelamars');
  }
}
