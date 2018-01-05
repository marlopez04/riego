<?php

use Illuminate\Database\Seeder;

class BombasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bombas')->insert([
			'direccion'     => 'null',
			'descripcion'     => 'bomba nula',
			'nombre'    => 'null',
			'estado'     => 'apagada',
			'stat'     => 'offline',
			'zonariego_id'     => '1'
			]);
        DB::table('bombas')->insert([
			'direccion'     => '192.168.1.20/bomba1s',
			'descripcion'     => 'bomba 1s',
			'nombre'    => 'bomba 1s',
			'estado'     => 'apagada',
			'zonariego_id'     => '1'
			]);
        DB::table('bombas')->insert([
			'direccion'     => '192.168.1.21/bomba1a',
			'descripcion'     => 'bomba 1a',
			'nombre'    => 'bomba 1a',
			'estado'     => 'apagada',
			'zonariego_id'     => '2'
			]);
        DB::table('bombas')->insert([
			'direccion'     => '192.168.1.21/bomba1g',
			'descripcion'     => 'bomba 1g',
			'nombre'    => 'bomba 1g',
			'estado'     => 'apagada',
			'zonariego_id'     => '3'
			]);
    }
}
