<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
          $table->increments('id');
          $table->string('prefix');
          $table->string('name');
          $table->string('last');
          $table->string('nick');
          $table->string('name_E');
          $table->string('last_E');
          $table->string('nick_E');
          $table->string('birth');
          $table->string('tel');
          $table->string('email');
          $table->string('position');
          $table->string('position_E');
          $table->string('type');
          $table->string('size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
