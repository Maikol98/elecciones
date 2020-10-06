<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActaPartido extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 1,
            'id_partido'        => 1,
            'cant_votos_pres'   => 12,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 1,
            'id_partido'        => 2,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 1,
            'id_partido'        => 3,
            'cant_votos_pres'   => 5,
            'cant_votos_dip'    => 13,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 1,
            'id_partido'        => 4,
            'cant_votos_pres'   => 8,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 1,
            'id_partido'        => 5,
            'cant_votos_pres'   => 6,
            'cant_votos_dip'    => 8,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 1,
            'id_partido'        => 6,
            'cant_votos_pres'   => 8,
            'cant_votos_dip'    => 6,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 1,
            'id_partido'        => 7,
            'cant_votos_pres'   => 8,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 1,
            'id_partido'        => 8,
            'cant_votos_pres'   => 2,
            'cant_votos_dip'    => 6,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 1,
            'id_partido'        => 9,
            'cant_votos_pres'   => 2,
            'cant_votos_dip'    => 6,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 2,
            'id_partido'        => 1,
            'cant_votos_pres'   => 5,
            'cant_votos_dip'    => 6,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 2,
            'id_partido'        => 2,
            'cant_votos_pres'   => 11,
            'cant_votos_dip'    => 8,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 2,
            'id_partido'        => 3,
            'cant_votos_pres'   => 74,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 2,
            'id_partido'        => 4,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 2,
            'id_partido'        => 5,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 2,
            'id_partido'        => 6,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 2,
            'id_partido'        => 7,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 12,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 2,
            'id_partido'        => 8,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 2,
            'id_partido'        => 9,
            'cant_votos_pres'   => 38,
            'cant_votos_dip'    => 15,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 3,
            'id_partido'        => 1,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 3,
            'id_partido'        => 2,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 3,
            'id_partido'        => 3,
            'cant_votos_pres'   => 48,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 3,
            'id_partido'        => 4,
            'cant_votos_pres'   => 58,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 3,
            'id_partido'        => 5,
            'cant_votos_pres'   => 58,
            'cant_votos_dip'    => 35,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 3,
            'id_partido'        => 6,
            'cant_votos_pres'   => 44,
            'cant_votos_dip'    => 17,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 3,
            'id_partido'        => 7,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 3,
            'id_partido'        => 8,
            'cant_votos_pres'   => 43,
            'cant_votos_dip'    => 12,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 3,
            'id_partido'        => 9,
            'cant_votos_pres'   => 35,
            'cant_votos_dip'    => 32,
        ]);

        //---------RECINTO 2----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 4,
            'id_partido'        => 1,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 12,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 4,
            'id_partido'        => 2,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 4,
            'id_partido'        => 3,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 12,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 4,
            'id_partido'        => 4,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 9,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 4,
            'id_partido'        => 5,
            'cant_votos_pres'   => 12,
            'cant_votos_dip'    => 8,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 4,
            'id_partido'        => 6,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 4,
            'id_partido'        => 7,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 12,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 4,
            'id_partido'        => 8,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 4,
            'id_partido'        => 9,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 35,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 5,
            'id_partido'        => 1,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 5,
            'id_partido'        => 2,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 41,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 5,
            'id_partido'        => 3,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 13,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 5,
            'id_partido'        => 4,
            'cant_votos_pres'   => 38,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 5,
            'id_partido'        => 5,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 5,
            'id_partido'        => 6,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 5,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 5,
            'id_partido'        => 8,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 5,
            'id_partido'        => 9,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 5,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 6,
            'id_partido'        => 1,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 6,
            'id_partido'        => 2,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 48,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 6,
            'id_partido'        => 3,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 6,
            'id_partido'        => 4,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 6,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 6,
            'id_partido'        => 6,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 18,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 6,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 6,
            'id_partido'        => 8,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 13,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 6,
            'id_partido'        => 9,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 0,
        ]);

        //---------RECINTO 3----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 7,
            'id_partido'        => 1,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 7,
            'id_partido'        => 2,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 7,
            'id_partido'        => 3,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 7,
            'id_partido'        => 4,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 7,
            'id_partido'        => 5,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 38,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 7,
            'id_partido'        => 6,
            'cant_votos_pres'   => 43,
            'cant_votos_dip'    => 17,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 7,
            'id_partido'        => 7,
            'cant_votos_pres'   => 38,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 7,
            'id_partido'        => 8,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 7,
            'id_partido'        => 9,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 30,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 8,
            'id_partido'        => 1,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 13,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 8,
            'id_partido'        => 2,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 8,
            'id_partido'        => 3,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 8,
            'id_partido'        => 4,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 8,
            'id_partido'        => 5,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 8,
            'id_partido'        => 6,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 8,
            'id_partido'        => 7,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 8,
            'id_partido'        => 8,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 8,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 9,
            'id_partido'        => 1,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 9,
            'id_partido'        => 2,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 9,
            'id_partido'        => 3,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 9,
            'id_partido'        => 4,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 9,
            'id_partido'        => 5,
            'cant_votos_pres'   => 1,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 9,
            'id_partido'        => 6,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 9,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 9,
            'id_partido'        => 8,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 9,
            'id_partido'        => 9,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 20,
        ]);

        //RECINTO 4
        //---------RECINTO 2----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 10,
            'id_partido'        => 1,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 10,
            'id_partido'        => 2,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 10,
            'id_partido'        => 3,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 10,
            'id_partido'        => 4,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 10,
            'id_partido'        => 5,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 10,
            'id_partido'        => 6,
            'cant_votos_pres'   => 8,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 10,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 10,
            'id_partido'        => 8,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 10,
            'id_partido'        => 9,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 11,
            'id_partido'        => 1,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 11,
            'id_partido'        => 2,
            'cant_votos_pres'   => 14,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 11,
            'id_partido'        => 3,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 11,
            'id_partido'        => 4,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 11,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 11,
            'id_partido'        => 6,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 11,
            'id_partido'        => 7,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 11,
            'id_partido'        => 8,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 28,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 11,
            'id_partido'        => 9,
            'cant_votos_pres'   => 28,
            'cant_votos_dip'    => 22,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 12,
            'id_partido'        => 1,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 12,
            'id_partido'        => 2,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 12,
            'id_partido'        => 3,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 12,
            'id_partido'        => 4,
            'cant_votos_pres'   => 8,
            'cant_votos_dip'    => 6,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 12,
            'id_partido'        => 5,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 12,
            'id_partido'        => 6,
            'cant_votos_pres'   => 5,
            'cant_votos_dip'    => 6,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 12,
            'id_partido'        => 7,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 45,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 12,
            'id_partido'        => 8,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 12,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);


        //RECINTO 5
        //---------RECINTO 2----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 13,
            'id_partido'        => 1,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 13,
            'id_partido'        => 2,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 13,
            'id_partido'        => 3,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 13,
            'id_partido'        => 4,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 13,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 13,
            'id_partido'        => 6,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 13,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 13,
            'id_partido'        => 8,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 13,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 14,
            'id_partido'        => 1,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 14,
            'id_partido'        => 2,
            'cant_votos_pres'   => 16,
            'cant_votos_dip'    => 12,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 14,
            'id_partido'        => 3,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 14,
            'id_partido'        => 4,
            'cant_votos_pres'   => 32,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 14,
            'id_partido'        => 5,
            'cant_votos_pres'   => 40,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 14,
            'id_partido'        => 6,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 14,
            'id_partido'        => 7,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 14,
            'id_partido'        => 8,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 12,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 14,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 15,
            'id_partido'        => 1,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 12,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 15,
            'id_partido'        => 2,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 15,
            'id_partido'        => 3,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 15,
            'id_partido'        => 4,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 15,
            'id_partido'        => 5,
            'cant_votos_pres'   => 13,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 15,
            'id_partido'        => 6,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 15,
            'id_partido'        => 7,
            'cant_votos_pres'   => 43,
            'cant_votos_dip'    => 40,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 15,
            'id_partido'        => 8,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 15,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //RECINTO 6
        //---------RECINTO 2----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 16,
            'id_partido'        => 1,
            'cant_votos_pres'   => 32,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 16,
            'id_partido'        => 2,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 16,
            'id_partido'        => 3,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 16,
            'id_partido'        => 4,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 16,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 16,
            'id_partido'        => 6,
            'cant_votos_pres'   => 25,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 16,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 16,
            'id_partido'        => 8,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 16,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 17,
            'id_partido'        => 1,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 17,
            'id_partido'        => 2,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 17,
            'id_partido'        => 3,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 17,
            'id_partido'        => 4,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 28,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 17,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 17,
            'id_partido'        => 6,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 17,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 17,
            'id_partido'        => 8,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 12,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 17,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 18,
            'id_partido'        => 1,
            'cant_votos_pres'   => 12,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 18,
            'id_partido'        => 2,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 18,
            'id_partido'        => 3,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 18,
            'id_partido'        => 4,
            'cant_votos_pres'   => 35,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 18,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 18,
            'id_partido'        => 6,
            'cant_votos_pres'   => 35,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 18,
            'id_partido'        => 7,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 18,
            'id_partido'        => 8,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 18,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //RECINTO 7
        //---------RECINTO 2----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 19,
            'id_partido'        => 1,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 19,
            'id_partido'        => 2,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 19,
            'id_partido'        => 3,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 19,
            'id_partido'        => 4,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 19,
            'id_partido'        => 5,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 19,
            'id_partido'        => 6,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 40,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 19,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 19,
            'id_partido'        => 8,
            'cant_votos_pres'   => 13,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 19,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 20,
            'id_partido'        => 1,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 20,
            'id_partido'        => 2,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 20,
            'id_partido'        => 3,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 20,
            'id_partido'        => 4,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 20,
            'id_partido'        => 5,
            'cant_votos_pres'   => 35,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 20,
            'id_partido'        => 6,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 20,
            'id_partido'        => 7,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 13,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 20,
            'id_partido'        => 8,
            'cant_votos_pres'   => 43,
            'cant_votos_dip'    => 35,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 20,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 21,
            'id_partido'        => 1,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 21,
            'id_partido'        => 2,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 21,
            'id_partido'        => 3,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 21,
            'id_partido'        => 4,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 13,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 21,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 21,
            'id_partido'        => 6,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 21,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 21,
            'id_partido'        => 8,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 13,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 21,
            'id_partido'        => 9,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);


        //RECINTO 8
        //---------RECINTO 2----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 22,
            'id_partido'        => 1,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 22,
            'id_partido'        => 2,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 8,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 22,
            'id_partido'        => 3,
            'cant_votos_pres'   => 13,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 22,
            'id_partido'        => 4,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 22,
            'id_partido'        => 5,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 22,
            'id_partido'        => 6,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 22,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 22,
            'id_partido'        => 8,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 38,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 22,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 23,
            'id_partido'        => 1,
            'cant_votos_pres'   => 2,
            'cant_votos_dip'    => 8,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 23,
            'id_partido'        => 2,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 23,
            'id_partido'        => 3,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 23,
            'id_partido'        => 4,
            'cant_votos_pres'   => 23,
            'cant_votos_dip'    => 12,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 23,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 23,
            'id_partido'        => 6,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 25,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 23,
            'id_partido'        => 7,
            'cant_votos_pres'   => 35,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 23,
            'id_partido'        => 8,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 23,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 24,
            'id_partido'        => 1,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 24,
            'id_partido'        => 2,
            'cant_votos_pres'   => 2,
            'cant_votos_dip'    => 2,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 24,
            'id_partido'        => 3,
            'cant_votos_pres'   => 8,
            'cant_votos_dip'    => 6,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 24,
            'id_partido'        => 4,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 24,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 24,
            'id_partido'        => 6,
            'cant_votos_pres'   => 18,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 24,
            'id_partido'        => 7,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 24,
            'id_partido'        => 8,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 24,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);


        //RECINTO 9
        //---------RECINTO 2----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 25,
            'id_partido'        => 1,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 25,
            'id_partido'        => 2,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 25,
            'id_partido'        => 3,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 25,
            'id_partido'        => 4,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 25,
            'id_partido'        => 5,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 25,
            'id_partido'        => 6,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 25,
            'id_partido'        => 7,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 28,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 25,
            'id_partido'        => 8,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 25,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 26,
            'id_partido'        => 1,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 26,
            'id_partido'        => 2,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 26,
            'id_partido'        => 3,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 26,
            'id_partido'        => 4,
            'cant_votos_pres'   => 35,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 26,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 26,
            'id_partido'        => 6,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 26,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 26,
            'id_partido'        => 8,
            'cant_votos_pres'   => 41,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 26,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 27,
            'id_partido'        => 1,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 27,
            'id_partido'        => 2,
            'cant_votos_pres'   => 45,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 27,
            'id_partido'        => 3,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 27,
            'id_partido'        => 4,
            'cant_votos_pres'   => 13,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 27,
            'id_partido'        => 5,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 27,
            'id_partido'        => 6,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 27,
            'id_partido'        => 7,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 25,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 27,
            'id_partido'        => 8,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 27,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 28,
            'id_partido'        => 1,
            'cant_votos_pres'   => 150,
            'cant_votos_dip'    => 50,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 28,
            'id_partido'        => 2,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 28,
            'id_partido'        => 3,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 60,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 28,
            'id_partido'        => 4,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 80,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 28,
            'id_partido'        => 5,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 28,
            'id_partido'        => 6,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 28,
            'id_partido'        => 7,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 2,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 28,
            'id_partido'        => 8,
            'cant_votos_pres'   => 5,
            'cant_votos_dip'    => 36,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 28,
            'id_partido'        => 9,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 20,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 29,
            'id_partido'        => 1,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 29,
            'id_partido'        => 2,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 29,
            'id_partido'        => 3,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 50,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 29,
            'id_partido'        => 4,
            'cant_votos_pres'   => 80,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 29,
            'id_partido'        => 5,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 29,
            'id_partido'        => 6,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 29,
            'id_partido'        => 7,
            'cant_votos_pres'   => 60,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 29,
            'id_partido'        => 8,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 29,
            'id_partido'        => 9,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 5,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 30,
            'id_partido'        => 1,
            'cant_votos_pres'   => 13,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 30,
            'id_partido'        => 2,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 50,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 30,
            'id_partido'        => 3,
            'cant_votos_pres'   => 60,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 30,
            'id_partido'        => 4,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 30,
            'id_partido'        => 5,
            'cant_votos_pres'   => 60,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 30,
            'id_partido'        => 6,
            'cant_votos_pres'   => 80,
            'cant_votos_dip'    => 40,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 30,
            'id_partido'        => 7,
            'cant_votos_pres'   => 5,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 30,
            'id_partido'        => 8,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 30,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //---------RECINTO 2----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 31,
            'id_partido'        => 1,
            'cant_votos_pres'   => 60,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 31,
            'id_partido'        => 2,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 31,
            'id_partido'        => 3,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 31,
            'id_partido'        => 4,
            'cant_votos_pres'   => 80,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 31,
            'id_partido'        => 5,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 31,
            'id_partido'        => 6,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 31,
            'id_partido'        => 7,
            'cant_votos_pres'   => 56,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 31,
            'id_partido'        => 8,
            'cant_votos_pres'   => 47,
            'cant_votos_dip'    => 60,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 31,
            'id_partido'        => 9,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 70,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 32,
            'id_partido'        => 1,
            'cant_votos_pres'   => 60,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 32,
            'id_partido'        => 2,
            'cant_votos_pres'   => 80,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 32,
            'id_partido'        => 3,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 32,
            'id_partido'        => 4,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 32,
            'id_partido'        => 5,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 60,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 32,
            'id_partido'        => 6,
            'cant_votos_pres'   => 40,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 32,
            'id_partido'        => 7,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 60,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 32,
            'id_partido'        => 8,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 32,
            'id_partido'        => 9,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 10,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 33,
            'id_partido'        => 1,
            'cant_votos_pres'   => 60,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 33,
            'id_partido'        => 2,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 33,
            'id_partido'        => 3,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 33,
            'id_partido'        => 4,
            'cant_votos_pres'   => 40,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 33,
            'id_partido'        => 5,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 33,
            'id_partido'        => 6,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 33,
            'id_partido'        => 7,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 33,
            'id_partido'        => 8,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 3,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 33,
            'id_partido'        => 9,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 15,
        ]);

        //---------RECINTO 3----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 34,
            'id_partido'        => 1,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 34,
            'id_partido'        => 2,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 34,
            'id_partido'        => 3,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 34,
            'id_partido'        => 4,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 34,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 34,
            'id_partido'        => 6,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 34,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 34,
            'id_partido'        => 8,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 34,
            'id_partido'        => 9,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 10,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 35,
            'id_partido'        => 1,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 35,
            'id_partido'        => 2,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 12,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 35,
            'id_partido'        => 3,
            'cant_votos_pres'   => 36,
            'cant_votos_dip'    => 3,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 35,
            'id_partido'        => 4,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 3,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 35,
            'id_partido'        => 5,
            'cant_votos_pres'   => 12,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 35,
            'id_partido'        => 6,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 12,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 35,
            'id_partido'        => 7,
            'cant_votos_pres'   => 14,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 35,
            'id_partido'        => 8,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 35,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 36,
            'id_partido'        => 1,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 36,
            'id_partido'        => 2,
            'cant_votos_pres'   => 6,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 36,
            'id_partido'        => 3,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 36,
            'id_partido'        => 4,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 36,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 36,
            'id_partido'        => 6,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 36,
            'id_partido'        => 7,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 36,
            'id_partido'        => 8,
            'cant_votos_pres'   => 47,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 36,
            'id_partido'        => 9,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 20,
        ]);

        //RECINTO 4
        //---------RECINTO 2----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 37,
            'id_partido'        => 1,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 37,
            'id_partido'        => 2,
            'cant_votos_pres'   => 5,
            'cant_votos_dip'    => 1,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 37,
            'id_partido'        => 3,
            'cant_votos_pres'   => 14,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 37,
            'id_partido'        => 4,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 37,
            'id_partido'        => 5,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 8,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 37,
            'id_partido'        => 6,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 37,
            'id_partido'        => 7,
            'cant_votos_pres'   => 1,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 37,
            'id_partido'        => 8,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 3,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 37,
            'id_partido'        => 9,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 14,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 38,
            'id_partido'        => 1,
            'cant_votos_pres'   => 3,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 38,
            'id_partido'        => 2,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 38,
            'id_partido'        => 3,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 3,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 38,
            'id_partido'        => 4,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 8,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 38,
            'id_partido'        => 5,
            'cant_votos_pres'   => 14,
            'cant_votos_dip'    => 8,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 38,
            'id_partido'        => 6,
            'cant_votos_pres'   => 23,
            'cant_votos_dip'    => 14,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 38,
            'id_partido'        => 7,
            'cant_votos_pres'   => 12,
            'cant_votos_dip'    => 5,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 38,
            'id_partido'        => 8,
            'cant_votos_pres'   => 14,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 38,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 39,
            'id_partido'        => 1,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 39,
            'id_partido'        => 2,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 2,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 39,
            'id_partido'        => 3,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 39,
            'id_partido'        => 4,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 2,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 39,
            'id_partido'        => 5,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 39,
            'id_partido'        => 6,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 39,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 39,
            'id_partido'        => 8,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 39,
            'id_partido'        => 9,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 8,
        ]);


        //RECINTO 5
        //---------RECINTO 2----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 40,
            'id_partido'        => 1,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 40,
            'id_partido'        => 2,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 2,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 40,
            'id_partido'        => 3,
            'cant_votos_pres'   => 8,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 40,
            'id_partido'        => 4,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 40,
            'id_partido'        => 5,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 40,
            'id_partido'        => 6,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 40,
            'id_partido'        => 7,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 40,
            'id_partido'        => 8,
            'cant_votos_pres'   => 22,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 40,
            'id_partido'        => 9,
            'cant_votos_pres'   => 5,
            'cant_votos_dip'    => 40,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 41,
            'id_partido'        => 1,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 41,
            'id_partido'        => 2,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 41,
            'id_partido'        => 3,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 15,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 41,
            'id_partido'        => 4,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 41,
            'id_partido'        => 5,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 41,
            'id_partido'        => 6,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 41,
            'id_partido'        => 7,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 40,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 41,
            'id_partido'        => 8,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 41,
            'id_partido'        => 9,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 40,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 42,
            'id_partido'        => 1,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 42,
            'id_partido'        => 2,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 42,
            'id_partido'        => 3,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 42,
            'id_partido'        => 4,
            'cant_votos_pres'   => 3,
            'cant_votos_dip'    => 4,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 42,
            'id_partido'        => 5,
            'cant_votos_pres'   => 12,
            'cant_votos_dip'    => 3,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 42,
            'id_partido'        => 6,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 42,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 42,
            'id_partido'        => 8,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 42,
            'id_partido'        => 9,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 40,
        ]);

        //RECINTO 6
        //---------RECINTO 2----------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 43,
            'id_partido'        => 1,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 43,
            'id_partido'        => 2,
            'cant_votos_pres'   => 40,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 43,
            'id_partido'        => 3,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 60,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 43,
            'id_partido'        => 4,
            'cant_votos_pres'   => 18,
            'cant_votos_dip'    => 3,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 43,
            'id_partido'        => 5,
            'cant_votos_pres'   => 60,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 43,
            'id_partido'        => 6,
            'cant_votos_pres'   => 15,
            'cant_votos_dip'    => 3,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 43,
            'id_partido'        => 7,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 43,
            'id_partido'        => 8,
            'cant_votos_pres'   => 3,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 43,
            'id_partido'        => 9,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 60,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 44,
            'id_partido'        => 1,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 44,
            'id_partido'        => 2,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 44,
            'id_partido'        => 3,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 44,
            'id_partido'        => 4,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 8,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 44,
            'id_partido'        => 5,
            'cant_votos_pres'   => 2,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 44,
            'id_partido'        => 6,
            'cant_votos_pres'   => 20,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 44,
            'id_partido'        => 7,
            'cant_votos_pres'   => 12,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 44,
            'id_partido'        => 8,
            'cant_votos_pres'   => 3,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 44,
            'id_partido'        => 9,
            'cant_votos_pres'   => 0,
            'cant_votos_dip'    => 0,
        ]);

        //-------------------------------
        DB::table('actapartido')->insert([
            'id_acta'           => 45,
            'id_partido'        => 1,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 45,
            'id_partido'        => 2,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 45,
            'id_partido'        => 3,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 30,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 45,
            'id_partido'        => 4,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 0,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 45,
            'id_partido'        => 5,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 60,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 45,
            'id_partido'        => 6,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 60,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 45,
            'id_partido'        => 7,
            'cant_votos_pres'   => 50,
            'cant_votos_dip'    => 10,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 45,
            'id_partido'        => 8,
            'cant_votos_pres'   => 30,
            'cant_votos_dip'    => 20,
        ]);
        DB::table('actapartido')->insert([
            'id_acta'           => 45,
            'id_partido'        => 9,
            'cant_votos_pres'   => 10,
            'cant_votos_dip'    => 30,
        ]);
    }
}
