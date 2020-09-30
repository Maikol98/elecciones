<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recintos extends Model
{
    protected $table = "recintos";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre',
        'ubicacion',
        'capacidad'
    ];
}
