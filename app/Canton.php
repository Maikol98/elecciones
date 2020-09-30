<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $table = "canton";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre'
    ];
}
