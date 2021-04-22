<?php

use Illuminate\Database\Seeder;
use App\Cargo;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cargo::create([
        	'nombre' => 'Agencia de policía',
        	'fecha_inicio' => '2021-04-20 15:03:22',
        	'fecha_termino' => '2021-04-20 15:03:22',
        ]);
        Cargo::create([
        	'nombre' => 'Escuela primaria',
        	'fecha_inicio' => '2021-04-20 15:03:22',
        	'fecha_termino' => '2021-04-20 15:03:22',
        ]);
        Cargo::create([
        	'nombre' => 'Escuela preescolar',
        	'fecha_inicio' => '2021-04-20 15:03:22',
        	'fecha_termino' => '2021-04-20 15:03:22',
        ]);
        Cargo::create([
        	'nombre' => 'Centro de salud',
        	'fecha_inicio' => '2021-04-20 15:03:22',
        	'fecha_termino' => '2021-04-20 15:03:22',
        ]);
        Cargo::create([
        	'nombre' => 'Escuela BIC 36',
        	'fecha_inicio' => '2021-04-20 15:03:22',
        	'fecha_termino' => '2021-04-20 15:03:22',
        ]);
        Cargo::create([
        	'nombre' => 'Telesecundaria',
        	'fecha_inicio' => '2021-04-20 15:03:22',
        	'fecha_termino' => '2021-04-20 15:03:22',
        ]);
        Cargo::create([
        	'nombre' => 'Región católica',
        	'fecha_inicio' => '2021-04-20 15:03:22',
        	'fecha_termino' => '2021-04-20 15:03:22',
        ]);
    }
}
