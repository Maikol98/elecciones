<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mesa extends Model
{
    protected $table = "mesa";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id',
        'numero',
        'rango',
        'capacidad',
        'fecha'
    ];
}
