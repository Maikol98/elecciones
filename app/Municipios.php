<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $table = "municipios";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre'
    ];
}
