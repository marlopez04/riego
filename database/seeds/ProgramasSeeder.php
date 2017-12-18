<?php

use Illuminate\Database\Seeder;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programas')->insert([
			'descripcion'     => 'programa nulo',
			'nombre'    => 'null',
			'stat'     => 'offline'
			]);

    }
}
