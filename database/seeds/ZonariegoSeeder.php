<?php

use Illuminate\Database\Seeder;

class ZonariegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zonariego')->insert([
			'descripcion'     => 'nula',
			'stat'     => 'offline'
			]);
        DB::table('zonariego')->insert([
			'descripcion'     => 'soja',
			'stat'     => 'online'
			]);
        DB::table('zonariego')->insert([
			'descripcion'     => 'arveja',
			'stat'     => 'online'
			]);
        DB::table('zonariego')->insert([
			'descripcion'     => 'girasol',
			'stat'     => 'online'
			]);
    }
}
