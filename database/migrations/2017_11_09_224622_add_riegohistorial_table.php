<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRiegohistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riegohistorial', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('estado',['habierta', 'cerrada'])->default('cerrada');
            $table->integer('programa_id')->unsigned();
            $table->foreign('programa_id')->references('id')->on('programas');
            $table->integer('valvula_id')->unsigned();
            $table->foreign('valvula_id')->references('id')->on('valvulas');
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
        Schema::drop('riegohistorial');
    }
}
