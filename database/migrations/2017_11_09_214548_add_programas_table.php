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
            $table->double('espera', 10, 0);
            $table->double('riego', 10, 0);
            $table->double('ciclos', 10, 0);
            $table->double('programasiguiente', 10, 0);
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
