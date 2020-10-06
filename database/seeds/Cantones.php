<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cantones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('canton')->insert([
            'id'=>1,
            'nombre'=>'lo que sea',
            'id_municipio'=>1
        ]);
    }
}
