<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddValvulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valvulas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direccion');
            $table->string('descripcion');
            $table->string('nombre');
            $table->timestamp('ultimoriego');
            $table->enum('estado',['habierta', 'cerrada'])->default('cerrada');
            $table->integer('bomba_id')->unsigned();
            $table->foreign('bomba_id')->references('id')->on('bombas');
            $table->integer('zonariego_id')->unsigned();
            $table->foreign('zonariego_id')->references('id')->on('zonariego');
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
        Schema::drop('valvulas');
    }
}
