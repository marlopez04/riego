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
			'direccion'     => 0,
			'descripcion'     => 'valvula nula',
			'nombre'    => 'null',
			'estado'     => 'libre',
			'stat'     => 'offline',
			'bomba_id'     => '1',
			'zonariego_id'     => '1'
			]);
        DB::table('valvulas')->insert([
			'direccion'     => 1,
			'descripcion'     => 'valvula 1s',
			'nombre'    => 'valvula 1s',
			'estado'     => 'libre',
			'bomba_id'     => '2',
			'zonariego_id'     => '2'
			]);
        DB::table('valvulas')->insert([
			'direccion'     => 2,
			'descripcion'     => 'valvula 2s',
			'nombre'    => 'valvula 2s',
			'estado'     => 'libre',
			'bomba_id'     => '2',
			'zonariego_id'     => '2'
			]);
        DB::table('valvulas')->insert([
			'direccion'     => 1,
			'descripcion'     => 'valvula 3s',
			'nombre'    => 'valvula 3s',
			'estado'     => 'libre',
			'bomba_id'     => '2',
			'zonariego_id'     => '2'
			]);
    }
}
