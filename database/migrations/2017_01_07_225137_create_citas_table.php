<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('personal_id')->unsigned();
            $table->foreign('personal_id')->references('id')->on('personals');

            $table->string('nombres');
            $table->string('apellidos');
            $table->string('celular');

            $table->date('fecha');
            $table->time('hora');
            $table->text('detalles');

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
        Schema::dropIfExists('citas');
    }
}
