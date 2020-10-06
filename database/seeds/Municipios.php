<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Municipios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            'id'=>1,
            'nombre'=>'Santa Cruz de la Sierra',
            'id_provincia'=>1
        ]);
        DB::table('municipios')->insert([
            'id'=>2,
            'nombre'=>'Cotoca',
            'id_provincia'=>1
        ]);
        DB::table('municipios')->insert([
            'id'=>3,
            'nombre'=>'El Torno',
            'id_provincia'=>1
        ]);
        DB::table('municipios')->insert([
            'id'=>4,
            'nombre'=>'La Guardia',
            'id_provincia'=>1
        ]);

        DB::table('municipios')->insert([
            'id'=>5,
            'nombre'=>'Warnes',
            'id_provincia'=>2
        ]);
        DB::table('municipios')->insert([
            'id'=>6,
            'nombre'=>'Okinawa I',
            'id_provincia'=>2
        ]);

        DB::table('municipios')->insert([
            'id'=>7,
            'nombre'=>'San Miguel Velasco',
            'id_provincia'=>3
        ]);
        DB::table('municipios')->insert([
            'id'=>8,
            'nombre'=>'San Ignacio de Velasco',
            'id_provincia'=>3
        ]);
        DB::table('municipios')->insert([
            'id'=>9,
            'nombre'=>'San Rafael de Velasco',
            'id_provincia'=>3
        ]);


        DB::table('municipios')->insert([
            'id'=>10,
            'nombre'=>'Buena Vista',
            'id_provincia'=>4
        ]);
        DB::table('municipios')->insert([
            'id'=>11,
            'nombre'=>'San Carlos',
            'id_provincia'=>4
        ]);
        DB::table('municipios')->insert([
            'id'=>12,
            'nombre'=>'Yapacani',
            'id_provincia'=>4
        ]);

        DB::table('municipios')->insert([
            'id'=>13,
            'nombre'=>'San Jose de Chiquitos',
            'id_provincia'=>5
        ]);
        DB::table('municipios')->insert([
            'id'=>14,
            'nombre'=>'Pailon',
            'id_provincia'=>5
        ]);
        DB::table('municipios')->insert([
            'id'=>15,
            'nombre'=>'Robore',
            'id_provincia'=>5
        ]);


        DB::table('municipios')->insert([
            'id'=>16,
            'nombre'=>'Portachuelo',
            'id_provincia'=>6
        ]);
        DB::table('municipios')->insert([
            'id'=>17,
            'nombre'=>'Colpa Belgica',
            'id_provincia'=>6
        ]);
        DB::table('municipios')->insert([
            'id'=>18,
            'nombre'=>'Santa Rosa del Sara',
            'id_provincia'=>6
        ]);
    }
}
