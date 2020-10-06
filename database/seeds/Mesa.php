<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mesa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //recinto 1
        DB::table('mesa')->insert([
            'id'         => 1,
            'numero'     => 1,
            'codigo'     => 12345,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 1,
        ]);
        DB::table('mesa')->insert([
            'id'         => 2,
            'numero'     => 2,
            'codigo'     => 12346,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 1,
        ]);
        DB::table('mesa')->insert([
            'id'         => 3,
            'numero'     => 3,
            'codigo'     => 12347,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 1,
        ]);



        //recinto 2
        DB::table('mesa')->insert([
            'id'         => 16,
            'numero'     => 1,
            'codigo'     => 12350,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 2,
        ]);
        DB::table('mesa')->insert([
            'id'         => 17,
            'numero'     => 2,
            'codigo'     => 12351,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 2,
        ]);
        DB::table('mesa')->insert([
            'id'         => 18,
            'numero'     => 3,
            'codigo'     => 12352,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 2,
        ]);



        //recinto 3
        DB::table('mesa')->insert([
            'id'         => 30,
            'numero'     => 1,
            'codigo'     => 12365,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 3,
        ]);
        DB::table('mesa')->insert([
            'id'         => 31,
            'numero'     => 2,
            'codigo'     => 12366,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 3,
        ]);
        DB::table('mesa')->insert([
            'id'         => 32,
            'numero'     => 3,
            'codigo'     => 12367,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 3,
        ]);


        //recinto 4
        DB::table('mesa')->insert([
            'id'         => 45,
            'numero'     => 1,
            'codigo'     => 12380,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 4,
        ]);
        DB::table('mesa')->insert([
            'id'         => 46,
            'numero'     => 2,
            'codigo'     => 12381,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 4,
        ]);
        DB::table('mesa')->insert([
            'id'         => 47,
            'numero'     => 3,
            'codigo'     => 12382,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 4,
        ]);


        //recinto 5
        DB::table('mesa')->insert([
            'id'         => 60,
            'numero'     => 1,
            'codigo'     => 12395,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 5,
        ]);
        DB::table('mesa')->insert([
            'id'         => 61,
            'numero'     => 2,
            'codigo'     => 12396,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 5,
        ]);
        DB::table('mesa')->insert([
            'id'         => 62,
            'numero'     => 3,
            'codigo'     => 12397,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 5,
        ]);


        //recinto 6
        DB::table('mesa')->insert([
            'id'         => 75,
            'numero'     => 1,
            'codigo'     => 12410,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 6,
        ]);
        DB::table('mesa')->insert([
            'id'         => 76,
            'numero'     => 2,
            'codigo'     => 12411,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 6,
        ]);
        DB::table('mesa')->insert([
            'id'         => 77,
            'numero'     => 3,
            'codigo'     => 12412,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 6,
        ]);


        //recinto 7
        DB::table('mesa')->insert([
            'id'         => 90,
            'numero'     => 1,
            'codigo'     => 12425,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 7,
        ]);
        DB::table('mesa')->insert([
            'id'         => 91,
            'numero'     => 2,
            'codigo'     => 12426,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 7,
        ]);
        DB::table('mesa')->insert([
            'id'         => 92,
            'numero'     => 3,
            'codigo'     => 12427,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 7,
        ]);


        //recinto 8
        DB::table('mesa')->insert([
            'id'         => 105,
            'numero'     => 1,
            'codigo'     => 12440,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 8,
        ]);
        DB::table('mesa')->insert([
            'id'         => 106,
            'numero'     => 2,
            'codigo'     => 12441,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 8,
        ]);
        DB::table('mesa')->insert([
            'id'         => 107,
            'numero'     => 3,
            'codigo'     => 12442,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 8,
        ]);


        //recinto 9
        DB::table('mesa')->insert([
            'id'         => 120,
            'numero'     => 1,
            'codigo'     => 12455,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 9,
        ]);
        DB::table('mesa')->insert([
            'id'         => 121,
            'numero'     => 2,
            'codigo'     => 12456,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 9,
        ]);
        DB::table('mesa')->insert([
            'id'         => 122,
            'numero'     => 3,
            'codigo'     => 12457,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 9,
        ]);


        //recinto 10
        DB::table('mesa')->insert([
            'id'         => 135,
            'numero'     => 1,
            'codigo'     => 12470,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 10,
        ]);
        DB::table('mesa')->insert([
            'id'         => 136,
            'numero'     => 2,
            'codigo'     => 12471,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 10,
        ]);
        DB::table('mesa')->insert([
            'id'         => 137,
            'numero'     => 3,
            'codigo'     => 12472,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 10,
        ]);



        //recinto 11
        DB::table('mesa')->insert([
            'id'         => 150,
            'numero'     => 1,
            'codigo'     => 12485,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 11,
        ]);
        DB::table('mesa')->insert([
            'id'         => 151,
            'numero'     => 2,
            'codigo'     => 12486,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 11,
        ]);
        DB::table('mesa')->insert([
            'id'         => 152,
            'numero'     => 3,
            'codigo'     => 12487,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 11,
        ]);



        //recinto 12
        DB::table('mesa')->insert([
            'id'         => 165,
            'numero'     => 1,
            'codigo'     => 12500,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 12,
        ]);
        DB::table('mesa')->insert([
            'id'         => 166,
            'numero'     => 2,
            'codigo'     => 12501,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 12,
        ]);
        DB::table('mesa')->insert([
            'id'         => 167,
            'numero'     => 3,
            'codigo'     => 12502,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 12,
        ]);



        //recinto 13
        DB::table('mesa')->insert([
            'id'         => 180,
            'numero'     => 1,
            'codigo'     => 12515,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 13,
        ]);
        DB::table('mesa')->insert([
            'id'         => 181,
            'numero'     => 2,
            'codigo'     => 12516,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 13,
        ]);
        DB::table('mesa')->insert([
            'id'         => 182,
            'numero'     => 3,
            'codigo'     => 12517,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 13,
        ]);



        //recinto 14
        DB::table('mesa')->insert([
            'id'         => 195,
            'numero'     => 1,
            'codigo'     => 12530,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 14,
        ]);
        DB::table('mesa')->insert([
            'id'         => 196,
            'numero'     => 2,
            'codigo'     => 12531,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 14,
        ]);
        DB::table('mesa')->insert([
            'id'         => 197,
            'numero'     => 3,
            'codigo'     => 12532,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 14,
        ]);



        //recinto 15
        DB::table('mesa')->insert([
            'id'         => 210,
            'numero'     => 1,
            'codigo'     => 12545,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 15,
        ]);
        DB::table('mesa')->insert([
            'id'         => 211,
            'numero'     => 2,
            'codigo'     => 12546,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 15,
        ]);
        DB::table('mesa')->insert([
            'id'         => 212,
            'numero'     => 3,
            'codigo'     => 12547,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 15,
        ]);


        //recinto 16
        DB::table('mesa')->insert([
            'id'         => 225,
            'numero'     => 1,
            'codigo'     => 12560,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 16,
        ]);
        DB::table('mesa')->insert([
            'id'         => 226,
            'numero'     => 2,
            'codigo'     => 12561,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 16,
        ]);
        DB::table('mesa')->insert([
            'id'         => 227,
            'numero'     => 3,
            'codigo'     => 12562,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 16,
        ]);


        //recinto 17
        DB::table('mesa')->insert([
            'id'         => 240,
            'numero'     => 1,
            'codigo'     => 12575,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 17,
        ]);
        DB::table('mesa')->insert([
            'id'         => 241,
            'numero'     => 2,
            'codigo'     => 12576,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 17,
        ]);
        DB::table('mesa')->insert([
            'id'         => 242,
            'numero'     => 3,
            'codigo'     => 12577,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 17,
        ]);


        //recinto 18
        DB::table('mesa')->insert([
            'id'         => 255,
            'numero'     => 1,
            'codigo'     => 12590,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 18,
        ]);
        DB::table('mesa')->insert([
            'id'         => 256,
            'numero'     => 2,
            'codigo'     => 12591,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 18,
        ]);
        DB::table('mesa')->insert([
            'id'         => 257,
            'numero'     => 3,
            'codigo'     => 12592,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 18,
        ]);


        //recinto 19
        DB::table('mesa')->insert([
            'id'         => 270,
            'numero'     => 1,
            'codigo'     => 12605,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 19,
        ]);
        DB::table('mesa')->insert([
            'id'         => 271,
            'numero'     => 2,
            'codigo'     => 12606,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 19,
        ]);
        DB::table('mesa')->insert([
            'id'         => 272,
            'numero'     => 3,
            'codigo'     => 12607,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 19,
        ]);



        //recinto 20
        DB::table('mesa')->insert([
            'id'         => 285,
            'numero'     => 1,
            'codigo'     => 12620,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 20,
        ]);
        DB::table('mesa')->insert([
            'id'         => 286,
            'numero'     => 2,
            'codigo'     => 12621,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 20,
        ]);
        DB::table('mesa')->insert([
            'id'         => 287,
            'numero'     => 3,
            'codigo'     => 12622,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 20,
        ]);


        //recinto 21
        DB::table('mesa')->insert([
            'id'         => 300,
            'numero'     => 1,
            'codigo'     => 12635,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 21,
        ]);
        DB::table('mesa')->insert([
            'id'         => 301,
            'numero'     => 2,
            'codigo'     => 12636,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 21,
        ]);
        DB::table('mesa')->insert([
            'id'         => 302,
            'numero'     => 3,
            'codigo'     => 12637,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 21,
        ]);


        //recinto 22
        DB::table('mesa')->insert([
            'id'         => 315,
            'numero'     => 1,
            'codigo'     => 12650,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 22,
        ]);
        DB::table('mesa')->insert([
            'id'         => 316,
            'numero'     => 2,
            'codigo'     => 12651,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 22,
        ]);
        DB::table('mesa')->insert([
            'id'         => 317,
            'numero'     => 3,
            'codigo'     => 12652,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 22,
        ]);


        //recinto 23
        DB::table('mesa')->insert([
            'id'         => 330,
            'numero'     => 1,
            'codigo'     => 12665,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 23,
        ]);
        DB::table('mesa')->insert([
            'id'         => 331,
            'numero'     => 2,
            'codigo'     => 12666,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 23,
        ]);
        DB::table('mesa')->insert([
            'id'         => 332,
            'numero'     => 3,
            'codigo'     => 12667,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 23,
        ]);


        //recinto 24
        DB::table('mesa')->insert([
            'id'         => 345,
            'numero'     => 1,
            'codigo'     => 12680,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 24,
        ]);
        DB::table('mesa')->insert([
            'id'         => 346,
            'numero'     => 2,
            'codigo'     => 12681,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 24,
        ]);
        DB::table('mesa')->insert([
            'id'         => 347,
            'numero'     => 3,
            'codigo'     => 12682,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 24,
        ]);


        //recinto 25
        DB::table('mesa')->insert([
            'id'         => 360,
            'numero'     => 1,
            'codigo'     => 12695,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 25,
        ]);
        DB::table('mesa')->insert([
            'id'         => 361,
            'numero'     => 2,
            'codigo'     => 12696,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 25,
        ]);
        DB::table('mesa')->insert([
            'id'         => 362,
            'numero'     => 3,
            'codigo'     => 12697,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 25,
        ]);


        //recinto 26
        DB::table('mesa')->insert([
            'id'         => 375,
            'numero'     => 1,
            'codigo'     => 12710,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 26,
        ]);
        DB::table('mesa')->insert([
            'id'         => 376,
            'numero'     => 2,
            'codigo'     => 12711,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 26,
        ]);
        DB::table('mesa')->insert([
            'id'         => 377,
            'numero'     => 3,
            'codigo'     => 12712,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 26,
        ]);


        //recinto 27
        DB::table('mesa')->insert([
            'id'         => 380,
            'numero'     => 1,
            'codigo'     => 12725,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 27,
        ]);
        DB::table('mesa')->insert([
            'id'         => 381,
            'numero'     => 2,
            'codigo'     => 12726,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 27,
        ]);
        DB::table('mesa')->insert([
            'id'         => 382,
            'numero'     => 3,
            'codigo'     => 12727,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 27,
        ]);


        //recinto 28
        DB::table('mesa')->insert([
            'id'         => 395,
            'numero'     => 1,
            'codigo'     => 12740,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 28,
        ]);
        DB::table('mesa')->insert([
            'id'         => 396,
            'numero'     => 2,
            'codigo'     => 12741,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 28,
        ]);
        DB::table('mesa')->insert([
            'id'         => 397,
            'numero'     => 3,
            'codigo'     => 12742,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 28,
        ]);


        //recinto 29
        DB::table('mesa')->insert([
            'id'         => 410,
            'numero'     => 1,
            'codigo'     => 12755,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 29,
        ]);
        DB::table('mesa')->insert([
            'id'         => 411,
            'numero'     => 2,
            'codigo'     => 12756,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 29,
        ]);
        DB::table('mesa')->insert([
            'id'         => 412,
            'numero'     => 3,
            'codigo'     => 12757,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 29,
        ]);


        //recinto 30
        DB::table('mesa')->insert([
            'id'         => 425,
            'numero'     => 1,
            'codigo'     => 12770,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 30,
        ]);
        DB::table('mesa')->insert([
            'id'         => 426,
            'numero'     => 2,
            'codigo'     => 12771,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 30,
        ]);
        DB::table('mesa')->insert([
            'id'         => 427,
            'numero'     => 3,
            'codigo'     => 12772,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 30,
        ]);


        //recinto 31
        DB::table('mesa')->insert([
            'id'         => 440,
            'numero'     => 1,
            'codigo'     => 12785,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 31,
        ]);
        DB::table('mesa')->insert([
            'id'         => 441,
            'numero'     => 2,
            'codigo'     => 12786,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 31,
        ]);
        DB::table('mesa')->insert([
            'id'         => 442,
            'numero'     => 3,
            'codigo'     => 12787,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 31,
        ]);


        //recinto 32
        DB::table('mesa')->insert([
            'id'         => 455,
            'numero'     => 1,
            'codigo'     => 12800,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 32,
        ]);
        DB::table('mesa')->insert([
            'id'         => 456,
            'numero'     => 2,
            'codigo'     => 12801,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 32,
        ]);
        DB::table('mesa')->insert([
            'id'         => 457,
            'numero'     => 3,
            'codigo'     => 12802,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 32,
        ]);


        //recinto 33
        DB::table('mesa')->insert([
            'id'         => 470,
            'numero'     => 1,
            'codigo'     => 12815,
            'rango'      => 'A - I',
            'capacidad'  => 200,
            'id_recinto' => 33,
        ]);
        DB::table('mesa')->insert([
            'id'         => 471,
            'numero'     => 2,
            'codigo'     => 12816,
            'rango'      => 'J - Q',
            'capacidad'  => 200,
            'id_recinto' => 33,
        ]);
        DB::table('mesa')->insert([
            'id'         => 472,
            'numero'     => 3,
            'codigo'     => 12817,
            'rango'      => 'R - Z',
            'capacidad'  => 200,
            'id_recinto' => 33,
        ]);
    }
}
