<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Partido extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partidos')->insert([
            'id'          => 1,
            'sigla'       => 'CC',
            'nombre_part' => 'Comunidad Ciudadana',
            'presidente'  => 'Carlos Mesa',
            'vice'        => 'Gustavo Pedraza',
        ]);
        DB::table('partidos')->insert([
            'id'          => 2,
            'sigla'       => 'FPV',
            'nombre_part' => 'Frente Para la Victoria',
            'presidente'  => 'Israel Franklin Rodríguez',
            'vice'        => 'Justino Román Hurtado',
        ]);
        DB::table('partidos')->insert([
            'id'          => 3,
            'sigla'       => 'MTS',
            'nombre_part' => 'Movimiento Tercer Sistema',
            'presidente'  => 'Félix Patzi',
            'vice'        => 'Lucila Mendieta Pérez',
        ]);
        DB::table('partidos')->insert([
            'id'          => 4,
            'sigla'       => 'UCS',
            'nombre_part' => 'Unidad Cívica Solidaria',
            'presidente'  => 'Victor Hugo Cardenas',
            'vice'        => 'Humberto Peinado Méndez',
        ]);
        DB::table('partidos')->insert([
            'id'          => 5,
            'sigla'       => 'MAS',
            'nombre_part' => 'Movimiento al Socialismo',
            'presidente'  => 'Evo Morales',
            'vice'        => 'Álvaro García Linera',
        ]);
        DB::table('partidos')->insert([
            'id'          => 6,
            'sigla'       => '21F',
            'nombre_part' => 'Bolivia Dice No',
            'presidente'  => 'Óscar Ortiz',
            'vice'        => 'Edwin Rodríguez',
        ]);
        DB::table('partidos')->insert([
            'id'          => 7,
            'sigla'       => 'PDC',
            'nombre_part' => 'Partido Democratico Cristiano',
            'presidente'  => 'Chi Hyun Chung',
            'vice'        => 'Paola Barriga Machicao',
        ]);
        DB::table('partidos')->insert([
            'id'          => 8,
            'sigla'       => 'MNR',
            'nombre_part' => 'Movimiento Nacionalista Revolucionario',
            'presidente'  => 'Virginio Lema',
            'vice'        => 'Fernando Untoja Choque',
        ]);
        DB::table('partidos')->insert([
            'id'          => 9,
            'sigla'       => 'PAN-BOL',
            'nombre_part' => 'Partido de Acción Nacional Boliviano',
            'presidente'  => 'Ruth Nina',
            'vice'        => 'Leopoldo Chui Torrez',
        ]);
    }
}
