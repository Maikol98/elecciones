<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincias extends Model
{
    protected $table = "provincias";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre'
    ];
}
