<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Departamentos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'id'    => 1,
            'nombre'    => 'Santa Cruz'
        ]);
        DB::table('departamentos')->insert([
            'id'        => 2,
            'nombre'    => 'Beni'
        ]);
        DB::table('departamentos')->insert([
            'id'        => 3,
            'nombre'    => 'La Paz'
        ]);
        DB::table('departamentos')->insert([
            'id'        => 4,
            'nombre'    => 'Cochabamba'
        ]);
        DB::table('departamentos')->insert([
            'id'        => 5,
            'nombre'    => 'Tarija'
        ]);
        DB::table('departamentos')->insert([
            'id'        => 6,
            'nombre'    => 'Sucre'
        ]);
        DB::table('departamentos')->insert([
            'id'        => 7,
            'nombre'    => 'Oruro'
        ]);
        DB::table('departamentos')->insert([
            'id'        => 8,
            'nombre'    => 'Potosi'
        ]);
        DB::table('departamentos')->insert([
            'id'        => 9,
            'nombre'    => 'Pando'
        ]);

    }
}
