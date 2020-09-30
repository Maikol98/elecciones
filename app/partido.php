<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partido extends Model
{
    protected $table = "partido";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre',
        'presidencia'
        'diputado'
    ];
}
