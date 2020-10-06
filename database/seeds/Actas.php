<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Actas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actas')->insert([
            'id'       => 1,
            'codigo'   => 12345,
            'imagen'   => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'     => 2,
            'blanco'   => 10,
            'valido'   => 160,
            'id_mesa'  => 1,
        ]);
        DB::table('actas')->insert([
            'id'        => 2,
            'codigo'    => 12346,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 3,
            'blanco'    => 10,
            'valido'    => 180,
            'id_mesa'   => 2,
        ]);
        DB::table('actas')->insert([
            'id'        => 3,
            'codigo'    => 12347,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 10,
            'blanco'    => 0,
            'valido'    => 180,
            'id_mesa'   => 3,
        ]);



        //recinto 2
        DB::table('actas')->insert([
            'id'        => 4,
            'codigo'    => 12350,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 15,
            'blanco'    => 10,
            'valido'    => 160,
            'id_mesa'   => 16,
        ]);
        DB::table('actas')->insert([
            'id'        => 5,
            'codigo'    => 12351,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 8,
            'blanco'    => 2,
            'valido'    => 180,
            'id_mesa'   => 17,
        ]);
        DB::table('actas')->insert([
            'id'        => 6,
            'codigo'    => 12352,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 0,
            'blanco'    => 0,
            'valido'    => 192,
            'id_mesa'   => 18,
        ]);



        //recinto 3
        DB::table('actas')->insert([
            'id'        => 7,
            'codigo'    => 12365,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 5,
            'blanco'    => 10,
            'valido'    => 160,
            'id_mesa'   => 30,
        ]);
        DB::table('actas')->insert([
            'id'        => 8,
            'codigo'    => 12366,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 10,
            'blanco'    => 10,
            'valido'    => 175,
            'id_mesa'   => 31,
        ]);
        DB::table('actas')->insert([
            'id'        => 9,
            'codigo'    => 12367,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 8,
            'blanco'    => 12,
            'valido'    => 150,
            'id_mesa'   => 32,
        ]);


        //recinto 4
        DB::table('actas')->insert([
            'id'        => 10,
            'codigo'    => 12380,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 10,
            'blanco'    => 8,
            'valido'    => 160,
            'id_mesa'   => 45,
        ]);
        DB::table('actas')->insert([
            'id'        => 11,
            'codigo'    => 12381,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 0,
            'blanco'    => 10,
            'valido'    => 160,
            'id_mesa'   => 46,
        ]);
        DB::table('actas')->insert([
            'id'        => 12,
            'codigo'    => 12382,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 9,
            'blanco'    => 10,
            'valido'    => 180,
            'id_mesa'   => 47,
        ]);


        //recinto 5
        DB::table('actas')->insert([
            'id'        => 13,
            'codigo'    => 12395,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 8,
            'blanco'    => 8,
            'valido'    => 180,
            'id_mesa'   => 60,
        ]);
        DB::table('actas')->insert([
            'id'        => 14,
            'codigo'    => 12396,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 9,
            'blanco'    => 12,
            'valido'    => 170,
            'id_mesa'   => 61,
        ]);
        DB::table('actas')->insert([
            'id'        => 15,
            'codigo'    => 12397,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 15,
            'blanco'    => 5,
            'valido'    => 160,
            'id_mesa'   => 62,
        ]);


        //recinto 6
        DB::table('actas')->insert([
            'id'        => 16,
            'codigo'    => 12410,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 2,
            'blanco'    => 10,
            'valido'    => 180,
            'id_mesa'   => 75,
        ]);
        DB::table('actas')->insert([
            'id'        => 17,
            'codigo'    => 12411,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 5,
            'blanco'    => 8,
            'valido'    => 180,
            'id_mesa'   => 76,
        ]);
        DB::table('actas')->insert([
            'id'        => 18,
            'codigo'    => 12412,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 2,
            'blanco'    => 5,
            'valido'    => 160,
            'id_mesa'   => 77,
        ]);


        //recinto 7
        DB::table('actas')->insert([
            'id'        => 19,
            'codigo'    => 12425,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 8,
            'blanco'    => 2,
            'valido'    => 160,
            'id_mesa'    => 90,
        ]);
        DB::table('actas')->insert([
            'id'        => 20,
            'codigo'    => 12426,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 8,
            'blanco'    => 5,
            'valido'    => 170,
            'id_mesa'   => 91,
        ]);
        DB::table('actas')->insert([
            'id'        => 21,
            'codigo'    => 12427,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 2,
            'blanco'    => 10,
            'valido'    => 160,
            'id_mesa'   => 92,
        ]);


        //recinto 8
        DB::table('actas')->insert([
            'id'        => 22,
            'codigo'    => 12440,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 5,
            'blanco'    => 2,
            'valido'    => 180,
            'id_mesa'   => 105,
        ]);
        DB::table('actas')->insert([
            'id'        => 23,
            'codigo'    => 12441,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 8,
            'blanco'    => 6,
            'valido'    => 180,
            'id_mesa'   => 106,
        ]);
        DB::table('actas')->insert([
            'id'        => 24,
            'codigo'    => 12442,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 6,
            'blanco'    => 6,
            'valido'    => 150,
            'id_mesa'   => 107,
        ]);


        //recinto 9
        DB::table('actas')->insert([
            'id'        => 25,
            'codigo'    => 12455,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 0,
            'blanco'    => 10,
            'valido'    => 150,
            'id_mesa'   => 120,
        ]);
        DB::table('actas')->insert([
            'id'        => 26,
            'codigo'    => 12456,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 8,
            'blanco'    => 2,
            'valido'    => 190,
            'id_mesa'   => 121,
        ]);
        DB::table('actas')->insert([
            'id'        => 27,
            'codigo'    => 12457,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 2,
            'blanco'    => 5,
            'valido'    => 160,
            'id_mesa'   => 122,
        ]);


        //recinto 10
        DB::table('actas')->insert([
            'id'        => 28,
            'codigo'    => 12470,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 8,
            'blanco'    => 0,
            'valido'    => 180,
            'id_mesa'   => 135,
        ]);
        DB::table('actas')->insert([
            'id'        => 29,
            'codigo'    => 12471,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 8,
            'blanco'    => 5,
            'valido'    => 160,
            'id_mesa'   => 136,
        ]);
        DB::table('actas')->insert([
            'id'        => 30,
            'codigo'    => 12472,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 0,
            'blanco'    => 2,
            'valido'    => 180,
            'id_mesa'   => 137,
        ]);



        //recinto 11
        DB::table('actas')->insert([
            'id'        => 31,
            'codigo'    => 12485,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 2,
            'blanco'    => 12,
            'valido'    => 180,
            'id_mesa'   => 150,
        ]);
        DB::table('actas')->insert([
            'id'        => 32,
            'codigo'    => 12486,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 0,
            'blanco'    => 10,
            'valido'    => 181,
            'id_mesa'   => 151,
        ]);
        DB::table('actas')->insert([
            'id'        => 33,
            'codigo'    => 12487,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 5,
            'blanco'    => 8,
            'valido'    => 180,
            'id_mesa'   => 152,
        ]);



        //recinto 12
        DB::table('actas')->insert([
            'id'        => 34,
            'codigo'    => 12500,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 5,
            'blanco'    => 10,
            'valido'    => 180,
            'id_mesa'   => 165,
        ]);
        DB::table('actas')->insert([
            'id'        => 35,
            'codigo'    => 12501,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 0,
            'blanco'    => 2,
            'valido'    => 180,
            'id_mesa'   => 166,
        ]);
        DB::table('actas')->insert([
            'id'        => 36,
            'codigo'    => 12502,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 2,
            'blanco'    => 5,
            'valido'    => 160,
            'id_mesa'   => 167,
        ]);



        //recinto 13
        DB::table('actas')->insert([
            'id'        => 37,
            'codigo'    => 12515,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 5,
            'blanco'    => 0,
            'valido'    => 180,
            'id_mesa'   => 180,
        ]);
        DB::table('actas')->insert([
            'id'        => 38,
            'codigo'    => 12516,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 0,
            'blanco'    => 5,
            'valido'    => 160,
            'id_mesa'   => 181,
        ]);
        DB::table('actas')->insert([
            'id'        => 39,
            'codigo'    => 12517,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 5,
            'blanco'    => 4,
            'valido'    => 160,
            'id_mesa'   => 182,
        ]);



        //recinto 14
        DB::table('actas')->insert([
            'id'        => 40,
            'codigo'    => 12530,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 5,
            'blanco'    => 5,
            'valido'    => 180,
            'id_mesa'   => 195,
        ]);
        DB::table('actas')->insert([
            'id'        => 41,
            'codigo'    => 12531,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 4,
            'blanco'    => 5,
            'valido'    => 180,
            'id_mesa'   => 196,
        ]);
        DB::table('actas')->insert([
            'id'        => 42,
            'codigo'    => 12532,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 4,
            'blanco'    => 5,
            'valido'    => 160,
            'id_mesa'   => 197,
        ]);



        //recinto 15
        DB::table('actas')->insert([
            'id'        => 43,
            'codigo'    => 12545,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 5,
            'blanco'    => 4,
            'valido'    => 180,
            'id_mesa'   => 210,
        ]);
        DB::table('actas')->insert([
            'id'        => 44,
            'codigo'    => 12546,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 0,
            'blanco'    => 5,
            'valido'    => 180,
            'id_mesa'   => 211,
        ]);
        DB::table('actas')->insert([
            'id'        => 45,
            'codigo'    => 12547,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 5,
            'blanco'    => 6,
            'valido'    => 170,
            'id_mesa'   => 212,
        ]);


        //recinto 16
        DB::table('actas')->insert([
            'id'        => 46,
            'codigo'    => 12560,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 5,
            'blanco'    => 6,
            'valido'    => 180,
            'id_mesa'   => 225,
        ]);
        DB::table('actas')->insert([
            'id'        => 98,
            'codigo'    => 12561,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 5,
            'blanco'    => 6,
            'valido'    => 180,
            'id_mesa'   => 226,
        ]);
        DB::table('actas')->insert([
            'id'        => 99,
            'codigo'    => 12562,
            'imagen'    => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601781482/acta-bolivia-informa-2019-reyqui_bu0ymb.jpg',
            'nulo'      => 0,
            'blanco'    => 0,
            'valido'    => 180,
            'id_mesa'   => 227,
        ]);

        //recinto 17
        DB::table('actas')->insert([
            'id'         => 47,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 1,
            'blanco'     => 0,
            'valido'     => 198,
            'id_mesa'    => 240,
            'codigo'     => 12575,
        ]);
        DB::table('actas')->insert([
            'id'         => 48,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 7,
            'valido'     => 193,
            'id_mesa'    => 241,
            'codigo'     => 12576,
        ]);
        DB::table('actas')->insert([
            'id'         => 49,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 7,
            'blanco'     => 0,
            'valido'     => 193,
            'id_mesa'    => 242,
            'codigo'     => 12577,
        ]);


        //recinto 18
        DB::table('actas')->insert([
            'id'         => 50,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 10,
            'blanco'     => 10,
            'valido'     => 175,
            'id_mesa'    => 255,
            'codigo'     => 12590,
        ]);
        DB::table('actas')->insert([
            'id'         => 51,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 0,
            'valido'     => 200,
            'id_mesa'    => 256,
            'codigo'     => 12591,
        ]);
        DB::table('actas')->insert([
            'id'         => 52,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 2,
            'blanco'     => 2,
            'valido'     => 196,
            'id_mesa'    => 257,
            'codigo'     => 12592,
        ]);


        //recinto 19
        DB::table('actas')->insert([
            'id'         => 53,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 2,
            'blanco'     => 0,
            'valido'     => 198,
            'id_mesa'    => 270,
            'codigo'     => 12605,
        ]);
        DB::table('actas')->insert([
            'id'         => 54,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 0,
            'valido'     => 200,
            'id_mesa'    => 271,
            'codigo'     => 12606,
        ]);
        DB::table('actas')->insert([
            'id'         => 55,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 2,
            'valido'     => 198,
            'id_mesa'    => 272,
            'codigo'     => 12607,
        ]);



        //recinto 20
        DB::table('actas')->insert([
            'id'         => 56,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 2,
            'blanco'     => 0,
            'valido'     => 198,
            'id_mesa'    => 285,
            'codigo'     => 12620,
        ]);
        DB::table('actas')->insert([
            'id'         => 57,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 0,
            'valido'     => 200,
            'id_mesa'    => 286,
            'codigo'     => 12621,
        ]);
        DB::table('actas')->insert([
            'id'         => 58,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 2,
            'blanco'     => 0,
            'valido'     => 198,
            'id_mesa'    => 287,
            'codigo'     => 12622,
        ]);


        //recinto 21
        DB::table('actas')->insert([
            'id'         => 59,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 5,
            'blanco'     => 6,
            'valido'     => 184,
            'id_mesa'    => 300,
            'codigo'     => 12635,
        ]);
        DB::table('actas')->insert([
            'id'         => 60,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 4,
            'blanco'     => 0,
            'valido'     => 196,
            'id_mesa'    => 301,
            'codigo'     => 12636,
        ]);
        DB::table('actas')->insert([
            'id'         => 61,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 2,
            'valido'     => 198,
            'id_mesa'    => 302,
            'codigo'     => 12637,
        ]);


        //recinto 22
        DB::table('actas')->insert([
            'id'         => 62,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 0,
            'valido'     => 190,
            'id_mesa'    => 315,
            'codigo'     => 12650,
        ]);
        DB::table('actas')->insert([
            'id'         => 63,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 0,
            'valido'     => 200,
            'id_mesa'    => 316,
            'codigo'     => 12651,
        ]);
        DB::table('actas')->insert([
            'id'         => 64,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 7,
            'blanco'     => 3,
            'valido'     => 189,
            'id_mesa'    => 317,
            'codigo'     => 12652,
        ]);


        //recinto 23
        DB::table('actas')->insert([
            'id'         => 65,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 1,
            'valido'     => 189,
            'id_mesa'    => 330,
            'codigo'     => 12665,
        ]);
        DB::table('actas')->insert([
            'id'         => 66,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 1,
            'blanco'     => 3,
            'valido'     => 190,
            'id_mesa'    => 331,
            'codigo'     => 12666,
        ]);
        DB::table('actas')->insert([
            'id'         => 67,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 5,
            'blanco'     => 5,
            'valido'     => 180,
            'id_mesa'    => 332,
            'codigo'     => 12667,
        ]);


        //recinto 24
        DB::table('actas')->insert([
            'id'         => 68,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 2,
            'valido'     => 190,
            'id_mesa'    => 345,
            'codigo'     => 12680,
        ]);
        DB::table('actas')->insert([
            'id'         => 69,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 7,
            'blanco'     => 5,
            'valido'     => 185,
            'id_mesa'    => 346,
            'codigo'     => 12681,
        ]);
        DB::table('actas')->insert([
            'id'         => 70,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 10,
            'blanco'     => 0,
            'valido'     => 190,
            'id_mesa'    => 347,
            'codigo'     => 12682,
        ]);


        //recinto 25
        DB::table('actas')->insert([
            'id'         => 71,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 8,
            'valido'     => 192,
            'id_mesa'    => 360,
            'codigo'     => 12695,
        ]);
        DB::table('actas')->insert([
            'id'         => 72,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 8,
            'blanco'     => 0,
            'valido'     => 192,
            'id_mesa'    => 361,
            'codigo'     => 12696,
        ]);
        DB::table('actas')->insert([
            'id'         => 73,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 1,
            'blanco'     => 0,
            'valido'     => 197,
            'id_mesa'    => 362,
            'codigo'     => 12697,
        ]);


        //recinto 26
        DB::table('actas')->insert([
            'id'         => 74,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 2,
            'valido'     => 197,
            'id_mesa'    => 375,
            'codigo'     => 12710,
        ]);
        DB::table('actas')->insert([
            'id'         => 75,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 1,
            'blanco'     => 1,
            'valido'     => 198,
            'id_mesa'    => 376,
            'codigo'     => 12711,
        ]);
        DB::table('actas')->insert([
            'id'         => 76,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 5,
            'blanco'     => 4,
            'valido'     => 186,
            'id_mesa'    => 377,
            'codigo'     => 12712,
        ]);


        //recinto 27
        DB::table('actas')->insert([
            'id'         => 77,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 7,
            'valido'     => 193,
            'id_mesa'    => 380,
            'codigo'     => 12725,
        ]);
        DB::table('actas')->insert([
            'id'         => 78,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 2,
            'blanco'     => 0,
            'valido'     => 198,
            'id_mesa'    => 381,
            'codigo'     => 12726,
        ]);
        DB::table('actas')->insert([
            'id'         => 79,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 2,
            'valido'     => 198,
            'id_mesa'    => 382,
            'codigo'     => 12727,
        ]);


        //recinto 28
        DB::table('actas')->insert([
            'id'         => 80,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 5,
            'blanco'     => 5,
            'valido'     => 190,
            'id_mesa'    => 395,
            'codigo'     => 12740,
        ]);
        DB::table('actas')->insert([
            'id'         => 81,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 2,
            'blanco'     => 15,
            'valido'     => 150,
            'id_mesa'    => 396,
            'codigo'     => 12741,
        ]);
        DB::table('actas')->insert([
            'id'         => 82,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 10,
            'blanco'     => 0,
            'valido'     => 195,
            'id_mesa'    => 397,
            'codigo'     => 12742,
        ]);


        //recinto 29
        DB::table('actas')->insert([
            'id'         => 83,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 5,
            'blanco'     => 0,
            'valido'     => 195,
            'id_mesa'    => 410,
            'codigo'     => 12755,
        ]);
        DB::table('actas')->insert([
            'id'         => 84,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 5,
            'blanco'     => 10,
            'valido'     => 160,
            'id_mesa'    => 411,
            'codigo'     => 12756,
        ]);
        DB::table('actas')->insert([
            'id'         => 85,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 1,
            'blanco'     => 2,
            'valido'     => 175,
            'id_mesa'    => 412,
            'codigo'     => 12757,
        ]);


        //recinto 30
        DB::table('actas')->insert([
            'id'         => 86,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 5,
            'blanco'     => 10,
            'valido'     => 158,
            'id_mesa'    => 425,
            'codigo'     => 12770,
        ]);
        DB::table('actas')->insert([
            'id'         => 87,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 2,
            'valido'     => 193,
            'id_mesa'    => 426,
            'codigo'     => 12771,
        ]);
        DB::table('actas')->insert([
            'id'         => 88,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 1,
            'blanco'     => 2,
            'valido'     => 180,
            'id_mesa'    => 427,
            'codigo'     => 12772,
        ]);


        //recinto 31
        DB::table('actas')->insert([
            'id'         => 89,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 1,
            'blanco'     => 4,
            'valido'     => 195,
            'id_mesa'    => 440,
            'codigo'     => 12785,
        ]);
        DB::table('actas')->insert([
            'id'         => 90,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 5,
            'blanco'     => 2,
            'valido'     => 180,
            'id_mesa'    => 441,
            'codigo'     => 12786,
        ]);
        DB::table('actas')->insert([
            'id'         => 91,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 15,
            'valido'     => 145,
            'id_mesa'    => 442,
            'codigo'     => 12787,
        ]);


        //recinto 32
        DB::table('actas')->insert([
            'id'         => 92,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 5,
            'blanco'     => 0,
            'valido'     => 180,
            'id_mesa'    => 455,
            'codigo'     => 12800,
        ]);
        DB::table('actas')->insert([
            'id'         => 93,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 10,
            'blanco'     => 0,
            'valido'     => 170,
            'id_mesa'    => 456,
            'codigo'     => 12801,
        ]);
        DB::table('actas')->insert([
            'id'         => 94,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 3,
            'blanco'     => 10,
            'valido'     => 150,
            'id_mesa'    => 457,
            'codigo'     => 12802,
        ]);


        //recinto 33
        DB::table('actas')->insert([
            'id'         => 95,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 0,
            'blanco'     => 10,
            'valido'     => 190,
            'id_mesa'    => 470,
            'codigo'     => 12815,
        ]);
        DB::table('actas')->insert([
            'id'         => 96,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 5,
            'blanco'     => 2,
            'valido'     => 180,
            'id_mesa'    => 471,
            'codigo'     => 12816,
        ]);
        DB::table('actas')->insert([
            'id'         => 97,
            'imagen'     => 'https://res.cloudinary.com/dnsbyxjbu/image/upload/v1601782454/1_xqfwsj.jpg',
            'nulo'       => 10,
            'blanco'     => 15,
            'valido'     => 150,
            'id_mesa'    => 472,
            'codigo'     => 12817,
        ]);

    }
}
