<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBombasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bombas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direccion');
            $table->string('descripcion');
            $table->string('nombre');
            $table->timestamp('ultimoriego');
            $table->enum('estado',['prendida', 'apagada'])->default('apagada');
            $table->enum('stat',['offline', 'online'])->default('online');
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
        Schema::drop('bombas');
    }
}
