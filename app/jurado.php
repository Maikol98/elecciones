<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurado extends Model
{
    protected $table = "jurado";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id',
        'ci',
        'nombre',
        'apellido',
        'imagen',
        'direccion'
    ];
}
