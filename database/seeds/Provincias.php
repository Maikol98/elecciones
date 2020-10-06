<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Provincias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Santa Cruz
        DB::table('provincias')->insert([
            'id'              => 1,
            'nombre'          => 'Andres Ibañez',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 2,
            'nombre'          => 'Warnes',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 3,
            'nombre'          => 'Velasco',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 4,
            'nombre'          => 'Ichilo',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 5,
            'nombre'          => 'Chiquitos',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 6,
            'nombre'          => 'Sara',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 7,
            'nombre'          => 'Cordillera',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 8,
            'nombre'          => 'Vallegrande',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 9,
            'nombre'          => 'Florida',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 10,
            'nombre'          => 'Obispo Santiesteban',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 11,
            'nombre'          => 'Ñuflo de Chavez',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 12,
            'nombre'          => 'Angel Sandoval',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 13,
            'nombre'          => 'Caballero',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 14,
            'nombre'          => 'German Busch',
            'id_departamento' => 1
        ]);
        DB::table('provincias')->insert([
            'id'              => 15,
            'nombre'          => 'Guarayos',
            'id_departamento' => 1
        ]);


        //Beni

        DB::table('provincias')->insert([
            'id'              => 16,
            'nombre'          => 'Cercado',
            'id_departamento' => 2
        ]);
        DB::table('provincias')->insert([
            'id'              => 17,
            'nombre'          => 'Vaca Diez',
            'id_departamento' => 2
        ]);
        DB::table('provincias')->insert([
            'id'              => 18,
            'nombre'          => 'Gral. J. Ballivian',
            'id_departamento' => 2
        ]);
        DB::table('provincias')->insert([
            'id'              => 19,
            'nombre'          => 'Yacuma',
            'id_departamento' => 2
        ]);
        DB::table('provincias')->insert([
            'id'              => 20,
            'nombre'          => 'Moxos',
            'id_departamento' => 2
        ]);
        DB::table('provincias')->insert([
            'id'              => 21,
            'nombre'          => 'Marban',
            'id_departamento' => 2
        ]);
        DB::table('provincias')->insert([
            'id'              => 22,
            'nombre'          => 'Mamore',
            'id_departamento' => 2
        ]);
        DB::table('provincias')->insert([
            'id'              => 23,
            'nombre'          => 'Itenez',
            'id_departamento' => 2
        ]);


        //La Paz

        DB::table('provincias')->insert([
            'id'              => 24,
            'nombre'          => 'Murillo',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 25,
            'nombre'          => 'Omasuyos',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 26,
            'nombre'          => 'Pacajes',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 27,
            'nombre'          => 'Camacho',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 28,
            'nombre'          => 'Muñecas',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 29,
            'nombre'          => 'Larecaja',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 30,
            'nombre'          => 'Franz Tamayo',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 31,
            'nombre'          => 'Ingavi',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 32,
            'nombre'          => 'Loayza',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 33,
            'nombre'          => 'Inquisivi',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 34,
            'nombre'          => 'Sur Yungas',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 35,
            'nombre'          => 'Los Andes',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 36,
            'nombre'          => 'Aroma',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 37,
            'nombre'          => 'Nor Yungas',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 38,
            'nombre'          => 'Abel Iturralde',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 39,
            'nombre'          => 'Bautista Saavedra',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 40,
            'nombre'          => 'Manco Kapac',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 41,
            'nombre'          => 'Gualberto Villarroel',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 42,
            'nombre'          => 'Gral. J. Manuel Pando',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 43,
            'nombre'          => 'Caranavi',
            'id_departamento' => 3
        ]);
        DB::table('provincias')->insert([
            'id'              => 44,
            'nombre'          => 'Cercado',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 45,
            'nombre'          => 'Campero',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 46,
            'nombre'          => 'Apoyapa',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 47,
            'nombre'          => 'Esteban Arce',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 48,
            'nombre'          => 'Arani',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 49,
            'nombre'          => 'Arque',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 50,
            'nombre'          => 'Capinota',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 51,
            'nombre'          => 'German Jordan',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 52,
            'nombre'          => 'Quillacollo',
            'id_departamento' => 5
        ]);
        DB::table('provincias')->insert([
            'id'              => 53,
            'nombre'          => 'Chapare',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 54,
            'nombre'          => 'Tapacari',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 55,
            'nombre'          => 'Carrasco',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 56,
            'nombre'          => 'Mizque',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 57,
            'nombre'          => 'Punata',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 58,
            'nombre'          => 'Bolivar',
            'id_departamento' => 4
        ]);
        DB::table('provincias')->insert([
            'id'              => 59,
            'nombre'          => 'Tiraque',
            'id_departamento' => 4
        ]);
    }
}
