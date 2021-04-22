<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //

     protected $fillable = [
        'nombre', 'fecha_inicio', 'fecha_termino',
    ];
}
