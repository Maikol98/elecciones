<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actas extends Model
{
    protected $table = "actas";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id',
        'codigo',
        'imagen',
        'voto_nulo',
        'voto_blanco',
        'voto_valido'
    ];
}
