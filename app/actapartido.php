<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actapartido extends Model
{
    protected $table = "actapartido";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id_acta',
        'id_partido',
        'presidencia',
        'diputado'
    ];
}
