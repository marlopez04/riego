<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('nombre');
            $table->double('espera_s', 10, 0);
            $table->integer('horas_e')->unsigned();
            $table->integer('minutos_e')->unsigned();
            $table->string('riego');
            $table->double('riego_s', 10, 0);
            $table->integer('ciclos')->unsigned();
            $table->integer('programasiguiente')->unsigned();
            $table->enum('stat',['offline', 'online'])->default('online');
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
        Schema::drop('programas');
    }
}
