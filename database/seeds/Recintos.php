<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Recintos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recintos')->insert([
            'id'=>1,
            'nombre'=>'San Francisco sur',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Santa Cruz',
            'provincia'=>'Andrez Ibañez',
            'municipio'=>'Cotoca',
            'canton'=>'Puerto Pailas',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>2,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Santa Cruz',
            'provincia'=>'Andrez Ibañez',
            'municipio'=>'El Torno',
            'canton'=>'Angostura',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>3,
            'nombre'=>'San Antonio',
            'ubicacion'=>'la cuchilla',
            'departamento'=>'Santa Cruz',
            'provincia'=>'Angel Sandoval',
            'municipio'=>'San Matias',
            'canton'=>'Las Petas',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>4,
            'nombre'=>'Ciudad Del Niño Jesus',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Santa Cruz',
            'provincia'=>'Chiquitos',
            'municipio'=>'Pailon',
            'canton'=>'Tres Cruces',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>5,
            'nombre'=>'Ramon Dario',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Santa Cruz',
            'provincia'=>'Chiquitos',
            'municipio'=>'Robore',
            'canton'=>'Santiago',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>6,
            'nombre'=>'La Salle',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Santa Cruz',
            'provincia'=>'Cordillera',
            'municipio'=>'Cabezas',
            'canton'=>'Abapo',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>7,
            'nombre'=>'Don Bosco II',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Santa Cruz',
            'provincia'=>'Cordillera',
            'municipio'=>'Boyuibe',
            'canton'=>'Boyuibe',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>8,
            'nombre'=>'San Patrick',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Santa Cruz',
            'provincia'=>'Florida',
            'municipio'=>'Samaipata',
            'canton'=>'Samaipata',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>9,
            'nombre'=>'Maria Magdalena',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Santa Cruz',
            'provincia'=>'Florida',
            'municipio'=>'Pampa Grande',
            'canton'=>'Los Negros',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>10,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Santa Cruz',
            'provincia'=>'German Busch',
            'municipio'=>'Puerto Suarez',
            'canton'=>'Santa Ana',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);

        // Sucre
        DB::table('recintos')->insert([
            'id'=>11,
            'nombre'=>'San Francisco sur',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Sucre',
            'provincia'=>'Azurduy',
            'municipio'=>'Villa Azurduy',
            'canton'=>'Azurduy',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>12,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Sucre',
            'provincia'=>'Azurduy',
            'municipio'=>'Tarvita',
            'canton'=>'Tarvita',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>13,
            'nombre'=>'San Antonio',
            'ubicacion'=>'la cuchilla',
            'departamento'=>'Sucre',
            'provincia'=>'Hernando Siles',
            'municipio'=>'Monteagudo',
            'canton'=>'monteagudo',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>14,
            'nombre'=>'Ciudad Del Niño Jesus',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Sucre',
            'provincia'=>'Luis Calvo',
            'municipio'=>'Huacaya',
            'canton'=>'Huacaya',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>15,
            'nombre'=>'Ramon Dario',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Sucre',
            'provincia'=>'Luis Calvo',
            'municipio'=>'Machareti',
            'canton'=>'Machareti',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>16,
            'nombre'=>'La Salle',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Sucre',
            'provincia'=>'Nor Cinti',
            'municipio'=>'Camargo',
            'canton'=>'Camargo',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>17,
            'nombre'=>'Don Bosco II',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Sucre',
            'provincia'=>'Nor Cinti',
            'municipio'=>'San Lucas',
            'canton'=>'San Lucas',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>18,
            'nombre'=>'San Patrick',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Sucre',
            'provincia'=>'Oropeza',
            'municipio'=>'Sucre',
            'canton'=>'Sucre',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>19,
            'nombre'=>'Maria Magdalena',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Sucre',
            'provincia'=>'Oropeza',
            'municipio'=>'Yotala',
            'canton'=>'Yotala',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>20,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Sucre',
            'provincia'=>'Oropeza',
            'municipio'=>'Poroma',
            'canton'=>'Poroma',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);

        //La Paz
        DB::table('recintos')->insert([
            'id'=>21,
            'nombre'=>'San Francisco sur',
            'ubicacion'=>'las palmitas',
            'departamento'=>'La Paz',
            'provincia'=>'Abel Iturralde',
            'municipio'=>'Ixiamas',
            'canton'=>'Ixiamas',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>22,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'las palmitas',
            'departamento'=>'La Paz',
            'provincia'=>'Abel Iturralde',
            'municipio'=>'San Buenaventura',
            'canton'=>'San Buenaventura',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>23,
            'nombre'=>'San Antonio',
            'ubicacion'=>'la cuchilla',
            'departamento'=>'La Paz',
            'provincia'=>'Aroma',
            'municipio'=>'Sica Sica',
            'canton'=>'Sica Sica',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>24,
            'nombre'=>'Ciudad Del Niño Jesus',
            'ubicacion'=>'las palmitas',
            'departamento'=>'La Paz',
            'provincia'=>'Aroma',
            'municipio'=>'Calamarca',
            'canton'=>'Calarmaca',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>25,
            'nombre'=>'Ramon Dario',
            'ubicacion'=>'las palmitas',
            'departamento'=>'La Paz',
            'provincia'=>'Aroma',
            'municipio'=>'Umala',
            'canton'=>'Umala',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>26,
            'nombre'=>'La Salle',
            'ubicacion'=>'las palmitas',
            'departamento'=>'La Paz',
            'provincia'=>'Bautista Saavedra',
            'municipio'=>'Curva',
            'canton'=>'Curva',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>27,
            'nombre'=>'Don Bosco II',
            'ubicacion'=>'las palmitas',
            'departamento'=>'La Paz',
            'provincia'=>'Camacho',
            'municipio'=>'Puerto Acosta',
            'canton'=>'Puerto Acosta',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>28,
            'nombre'=>'San Patrick',
            'ubicacion'=>'lo mismo',
            'departamento'=>'La Paz',
            'provincia'=>'Camacho',
            'municipio'=>'Mocomoco',
            'canton'=>'Mocomoco',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>29,
            'nombre'=>'Maria Magdalena',
            'ubicacion'=>'lo mismo',
            'departamento'=>'La Paz',
            'provincia'=>'Caravani',
            'municipio'=>'Escoma',
            'canton'=>'Escoma',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>30,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'lo mismo',
            'departamento'=>'La Paz',
            'provincia'=>'Murillo',
            'municipio'=>'El Alto',
            'canton'=>'El Alto',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);

        //Cochabamba
        DB::table('recintos')->insert([
            'id'=>31,
            'nombre'=>'San Francisco sur',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Cochabamba',
            'provincia'=>'Arani',
            'municipio'=>'Arani',
            'canton'=>'Arani',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>32,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Cochabamba',
            'provincia'=>'Arani',
            'municipio'=>'Vacas',
            'canton'=>'Vacas',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>33,
            'nombre'=>'San Antonio',
            'ubicacion'=>'la cuchilla',
            'departamento'=>'Cochabamba',
            'provincia'=>'Arque',
            'municipio'=>'Arque',
            'canton'=>'Arque',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>34,
            'nombre'=>'Ciudad Del Niño Jesus',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Cochabamba',
            'provincia'=>'Arque',
            'municipio'=>'Tacopaya',
            'canton'=>'Tacopaya',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>35,
            'nombre'=>'Ramon Dario',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Cochabamba',
            'provincia'=>'Ayopaya',
            'municipio'=>'Morochata',
            'canton'=>'Morochata',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>36,
            'nombre'=>'La Salle',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Cochabamba',
            'provincia'=>'Ayopaya',
            'municipio'=>'Cocapata',
            'canton'=>'Cocapata',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>37,
            'nombre'=>'Don Bosco II',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Cochabamba',
            'provincia'=>'Bolivar',
            'municipio'=>'Bolivar',
            'canton'=>'Bolivar',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>38,
            'nombre'=>'San Patrick',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Cochabamba',
            'provincia'=>'Campero',
            'municipio'=>'Aiquile',
            'canton'=>'Aiquile',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>39,
            'nombre'=>'Maria Magdalena',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Cochabamba',
            'provincia'=>'Campero',
            'municipio'=>'Omerque',
            'canton'=>'Omerque',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>40,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Cochabamba',
            'provincia'=>'Capinota',
            'municipio'=>'Capinota',
            'canton'=>'Capinota',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);

        //Oruro
        DB::table('recintos')->insert([
            'id'=>41,
            'nombre'=>'San Francisco sur',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Oruro',
            'provincia'=>'Sabaya',
            'municipio'=>'Chipaya',
            'canton'=>'Chipaya',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>42,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Oruro',
            'provincia'=>'Sabaya',
            'municipio'=>'Coipasa',
            'canton'=>'Coipasa',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>43,
            'nombre'=>'San Antonio',
            'ubicacion'=>'la cuchilla',
            'departamento'=>'Oruro',
            'provincia'=>'Carangas',
            'municipio'=>'Corque',
            'canton'=>'Corque',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>44,
            'nombre'=>'Ciudad Del Niño Jesus',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Oruro',
            'provincia'=>'Carangas',
            'municipio'=>'Choquecota',
            'canton'=>'Choquecota',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>45,
            'nombre'=>'Ramon Dario',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Oruro',
            'provincia'=>'Cercado',
            'municipio'=>'Caracollo',
            'canton'=>'Caracollo',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>46,
            'nombre'=>'La Salle',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Oruro',
            'provincia'=>'Cercado',
            'municipio'=>'El Choro',
            'canton'=>'El Choro',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>47,
            'nombre'=>'Don Bosco II',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Oruro',
            'provincia'=>'Eduardo Abaroa',
            'municipio'=>'Challapata',
            'canton'=>'Challapata',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>48,
            'nombre'=>'San Patrick',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Oruro',
            'provincia'=>'Eduardo Abaroa',
            'municipio'=>'Santuario de Quillacas',
            'canton'=>'Oruro',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>49,
            'nombre'=>'Maria Magdalena',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Oruro',
            'provincia'=>'Litoral',
            'municipio'=>'Escara',
            'canton'=>'Escara',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>50,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Oruro',
            'provincia'=>'Litoral',
            'municipio'=>'Esmeralda',
            'canton'=>'Esmeralda',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);

        //Potosi
        DB::table('recintos')->insert([
            'id'=>51,
            'nombre'=>'San Francisco sur',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Potosi',
            'provincia'=>'Alonso de Ibañez',
            'municipio'=>'Sacaca',
            'canton'=>'Sacaca',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>52,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Potosi',
            'provincia'=>'Alonso de Ibañez',
            'municipio'=>'Caripuyo',
            'canton'=>'Carapuyo',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>53,
            'nombre'=>'San Antonio',
            'ubicacion'=>'la cuchilla',
            'departamento'=>'Potosi',
            'provincia'=>'Charcas',
            'municipio'=>'Toro Toro',
            'canton'=>'Toro Toro',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>54,
            'nombre'=>'Ciudad Del Niño Jesus',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Potosi',
            'provincia'=>'Chayanta',
            'municipio'=>'Ocuri',
            'canton'=>'Ocuri',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>55,
            'nombre'=>'Ramon Dario',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Potosi',
            'provincia'=>'Chayanta',
            'municipio'=>'Ravelo',
            'canton'=>'Ravelo',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>56,
            'nombre'=>'La Salle',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Potosi',
            'provincia'=>'Chayanta',
            'municipio'=>'Pocoata',
            'canton'=>'Pocoata',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>57,
            'nombre'=>'Don Bosco II',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Potosi',
            'provincia'=>'Cornelio Saavedra',
            'municipio'=>'Chaqui',
            'canton'=>'Chaqui',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>58,
            'nombre'=>'San Patrick',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Potosi',
            'provincia'=>'Cornelio Saavedra',
            'municipio'=>'Betanzos',
            'canton'=>'Betanzos',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>59,
            'nombre'=>'Maria Magdalena',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Potosi',
            'provincia'=>'Tomas Frias',
            'municipio'=>'Urmiri',
            'canton'=>'Urmiri',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>60,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Potosi',
            'provincia'=>'Tomas Frias',
            'municipio'=>'Villa de Yocalla',
            'canton'=>'Villa de Yocalla',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);

        // Tarija
        DB::table('recintos')->insert([
            'id'=>61,
            'nombre'=>'San Francisco sur',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Tarija',
            'provincia'=>'Aniceto Arce',
            'municipio'=>'Padcaya',
            'canton'=>'Padcaya',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>62,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Tarija',
            'provincia'=>'Aniceto Arce',
            'municipio'=>'Bermejo',
            'canton'=>'bermejo',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>63,
            'nombre'=>'San Antonio',
            'ubicacion'=>'la cuchilla',
            'departamento'=>'Tarija',
            'provincia'=>'Aviles',
            'municipio'=>'Uriondo',
            'canton'=>'Uriondo',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>64,
            'nombre'=>'Ciudad Del Niño Jesus',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Tarija',
            'provincia'=>'Aviles',
            'municipio'=>'Yuchara',
            'canton'=>'Yuchara',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>65,
            'nombre'=>'Ramon Dario',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Tarija',
            'provincia'=>'Cercado',
            'municipio'=>'Tarija',
            'canton'=>'Tarija',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>66,
            'nombre'=>'La Salle',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Tarija',
            'provincia'=>'Gran Chaco',
            'municipio'=>'Yacuiba',
            'canton'=>'Yacuiba',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>67,
            'nombre'=>'Don Bosco II',
            'ubicacion'=>'las palmitas',
            'departamento'=>'Tarija',
            'provincia'=>'Gran Chaco',
            'municipio'=>'Villamontes',
            'canton'=>'Villamontes',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>68,
            'nombre'=>'San Patrick',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Tarija',
            'provincia'=>'Mendez',
            'municipio'=>'El Puente',
            'canton'=>'El Puente',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>69,
            'nombre'=>'Maria Magdalena',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Tarija',
            'provincia'=>'Mendez',
            'municipio'=>'San Lorenzo',
            'canton'=>'San Lorenzo',
            'capacidad'=>'5200',
            'id_canton'=>1
        ]);
        DB::table('recintos')->insert([
            'id'=>70,
            'nombre'=>'Don Bosco',
            'ubicacion'=>'lo mismo',
            'departamento'=>'Tarija',
            'provincia'=>'OConnor',
            'municipio'=>'Entre Rios',
            'canton'=>'Entre Rios',
            'capacidad'=>'3800',
            'id_canton'=>1
        ]);

        //Beni
        // DB::table('recintos')->insert([
        //     'id'=>1,
        //     'nombre'=>'San Francisco sur',
        //     'ubicacion'=>'las palmitas',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>2,
        //     'nombre'=>'Don Bosco',
        //     'ubicacion'=>'las palmitas',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>3,
        //     'nombre'=>'San Antonio',
        //     'ubicacion'=>'la cuchilla',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'3800',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>4,
        //     'nombre'=>'Ciudad Del Niño Jesus',
        //     'ubicacion'=>'las palmitas',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>5,
        //     'nombre'=>'Ramon Dario',
        //     'ubicacion'=>'las palmitas',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>6,
        //     'nombre'=>'La Salle',
        //     'ubicacion'=>'las palmitas',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>7,
        //     'nombre'=>'Don Bosco II',
        //     'ubicacion'=>'las palmitas',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'3800',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>8,
        //     'nombre'=>'San Patrick',
        //     'ubicacion'=>'lo mismo',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>9,
        //     'nombre'=>'Maria Magdalena',
        //     'ubicacion'=>'lo mismo',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>10,
        //     'nombre'=>'Don Bosco',
        //     'ubicacion'=>'lo mismo',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'3800',
        //     'id_canton'=>1
        // ]);

        // //Pando

        // DB::table('recintos')->insert([
        //     'id'=>1,
        //     'nombre'=>'San Francisco sur',
        //     'ubicacion'=>'las palmitas',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>2,
        //     'nombre'=>'Don Bosco',
        //     'ubicacion'=>'las palmitas',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>3,
        //     'nombre'=>'San Antonio',
        //     'ubicacion'=>'la cuchilla',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'3800',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>4,
        //     'nombre'=>'Ciudad Del Niño Jesus',
        //     'ubicacion'=>'las palmitas',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>5,
        //     'nombre'=>'Ramon Dario',
        //     'ubicacion'=>'las palmitas',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>6,
        //     'nombre'=>'La Salle',
        //     'ubicacion'=>'las palmitas',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>7,
        //     'nombre'=>'Don Bosco II',
        //     'ubicacion'=>'las palmitas',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'3800',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>8,
        //     'nombre'=>'San Patrick',
        //     'ubicacion'=>'lo mismo',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>9,
        //     'nombre'=>'Maria Magdalena',
        //     'ubicacion'=>'lo mismo',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'5200',
        //     'id_canton'=>1
        // ]);
        // DB::table('recintos')->insert([
        //     'id'=>10,
        //     'nombre'=>'Don Bosco',
        //     'ubicacion'=>'lo mismo',
        //     'departamento'=>'',
        //     'provincia'=>'',
        //     'municipio'=>'',
        //     'canton'=>'',
        //     'capacidad'=>'3800',
        //     'id_canton'=>1
        // ]);
    }
}
