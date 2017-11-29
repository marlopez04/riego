<?php

use Illuminate\Database\Seeder;

class ValvulasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('valvulas')->insert([
			'direccion'     => 'valvula nula',
			'descripcion'     => 'valvula nula',
			'nombre'    => 'valvula nula',
			'estado'     => 'apagada',
			'stat'     => 'offline',
			'bomba_id'     => '1',
			'zonariego_id'     => '1'
			]);
        DB::table('valvulas')->insert([
			'direccion'     => '192.168.1.20/valvula1s',
			'descripcion'     => 'valvula 1s',
			'nombre'    => 'valvula 1s',
			'estado'     => 'apagada',
			'bomba_id'     => '2',
			'zonariego_id'     => '2'
			]);
        DB::table('valvulas')->insert([
			'direccion'     => '192.168.1.20/bomba1a',
			'descripcion'     => 'valvula 1s',
			'nombre'    => 'valvula 1s',
			'estado'     => 'apagada',
			'bomba_id'     => '2',
			'zonariego_id'     => '2'
			]);
        DB::table('valvulas')->insert([
			'direccion'     => '192.168.1.20/bomba1a',
			'descripcion'     => 'bomba 1a',
			'nombre'    => 'valvula 1a',
			'estado'     => 'apagada',
			'bomba_id'     => '3',
			'zonariego_id'     => '3'
			]);
        DB::table('valvulas')->insert([
			'direccion'     => '192.168.1.20/bomba1g',
			'descripcion'     => 'bomba 1g',
			'nombre'    => 'valvula 1g',
			'estado'     => 'apagada',
			'bomba_id'     => '4',
			'zonariego_id'     => '2'
			]);
    }
}
