<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudadano extends Model
{
    //
    protected $fillable = [
        'nombre', 'apellidoP', 'apellidoM', 'idcargo', 'idbarrio', 'idbarrio', 'idactividad', 'estatus'
    ];
}
