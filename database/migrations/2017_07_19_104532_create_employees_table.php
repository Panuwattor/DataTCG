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
          $table->string('lastName');
          $table->string('nickName');
          $table->string('nameEN');
          $table->string('lastNameEn');
          $table->string('nickNameEn');
          $table->date('birth');
          $table->Integer('tel');
          $table->string('email')->unique();
          $table->string('position');
          $table->string('positionEn');
          $table->string('type');
          $table->string('shirtSize');
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
